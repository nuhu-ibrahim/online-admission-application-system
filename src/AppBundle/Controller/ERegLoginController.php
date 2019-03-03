<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Student;
use AppBundle\Entity\Transaction;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ERegLoginController extends Controller
{
    /**
     * @Route("/adm", name="editLog")
     */
    public function indexAction(Request $request)
    {   
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $this->denyAccessUnlessGranted('ROLE_STUDENT_APP', null, 'Unable to access this page!');
        
        $errors=array();
        $user = $this->getUser();
        $email = $user->getEmail();
        
        $student= new Student();
        $student->setEmail($email);
        $form = $this->createFormBuilder($student, array('validation_groups' => array("val")))
                ->add('email', TextType::class, array('disabled' => 'true'))
                ->add('submit', SubmitType::class, array('label' => 'Continue Edit'))
                ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $st = $em->getRepository('AppBundle:Student')->findOneByEmail($student->getEmail());
            if($st){
                $validator = $this->get('validator');
                $err = $validator->validate($st, null, array('strict'));
                //$errors = $validator->validate($st);
                //return new Response(var_dump($err));
                if(count($err)!=0){
                    $errors[]="Registration was not previously completed.";
                }else{
                    $tr = $em->getRepository('AppBundle:Transaction')->findOneBy(array('app_no' =>$st->getAppNo(), 'pay_status' => 'paid', 'trans_type'=>'Edit'));
                    if($tr){
                        return $this->redirectToRoute("editReg");
                    }else{
                        $tr = $em->getRepository('AppBundle:Transaction')->findOneBy(array('app_no' =>$st->getAppNo(), 'pay_status' => 'unpaid', 'trans_type'=>'Edit'));
                        if($tr){
                            $errors[]="Kindly Pay for your previously initiated invoice.";
                        }else{
                            $transaction= new Transaction();

                            $transaction->setAppNo($st->getAppNo());
                            $transaction->setPayStatus("unpaid");
                            $transaction->setTransType("Edit");

                            $query = $em->createQuery(
                            'SELECT Max(p.id)
                            FROM AppBundle:Transaction p');
                            $tra = $query->setMaxResults(1)->getOneOrNullResult();
                            $transaction->setInvoiceNo('2017000000'.($tra[1]+1));

                            $em->persist($transaction);
                            $em->flush();
                
                //Persist data to the transactiontbl

                return $this->redirectToRoute('task_success3', 
                        array("name"=>$st->getFirstname()." ".$st->getSurname(),
                        "programme"=>$st->getProgramme(),
                        "email"=>$st->getEmail(), "phone"=>$st->getMobile(),
                        "invoice"=>$transaction->getInvoiceNo(), "appNo"=>$st->getAppNo())); 
                        }
                    }
                }
            }else{
                $errors[]="Email does not match";
            }
        }
        return $this->render('edit_registration/index.html.twig', array(
        'form' => $form->createView(), 'errors'=>$errors));
    }
    
    /**
     * @Route("/print_edit_slip/", name="task_success3")
     */
    
    public function nxtAction(Request $request){
        return $this->render('edit_registration/slip.html.twig',
            array('appNo'=>$request->query->get('appNo'),
                'name'=>$request->query->get('name'),
                "programme"=>$request->query->get('programme'),
                "email"=>$request->query->get('email'), "phone"=>$request->query->get('phone'),
                "invoice"=>$request->query->get('invoice')));
    }
}
