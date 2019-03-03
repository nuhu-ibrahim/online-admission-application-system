<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Student;
use AppBundle\Entity\Transaction;
use AppBundle\Entity\User;
use AppBundle\Entity\Task;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class ActivateController extends Controller
{
    /**
     * @Route("/activate", name="activate")
     */
    public function newAction(Request $request)
    {        
        $errors=array(); $validated=""; $invoiceNo=""; $name=""; $email=""; $programme=""; $course=""; $msg="";
        $transaction = new Transaction();
        $form = $this->createFormBuilder($transaction, array('validation_groups' => array("confirm")
                    ))->add('invoiceNo', TextType::class)
                      ->add('validate', SubmitType::class, array('label' => 'Validate'))
                      ->add('activate', SubmitType::class, array('label' => 'Activate'))
                      ->getForm();
        $form->handleRequest($request);
        $errors=array();
        if ($form->isSubmitted() && $form->isValid()) {   
            //Confirm invoice number, pick required information, render the page with the information
            
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery("SELECT p
                FROM AppBundle:Transaction p
                WHERE p.invoice_no= :invoice AND p.pay_status='unpaid'" )->setParameter('invoice', $transaction->getInvoiceNo());
            $tra = $query->setMaxResults(1)->getOneOrNullResult();
            
            if($tra){
                if($tra->getPayStatus()=="unpaid"){
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery("SELECT p
                    FROM AppBundle:Student p
                    WHERE p.app_no= :app_no"
                    )->setParameter('app_no', $tra->getAppNo());
                    $exist = $query->setMaxResults(1)->getResult();
                    $validated="Validated"; $invoiceNo=$tra->getInvoiceNo();
                    //return new Response($exist[0]->getFirstname());
                    $name=$exist[0]->getSurname()." ".$exist[0]->getFirstname();
                    $email=$exist[0]->getEmail(); $programme=$exist[0]->getProgramme();
                    $course=$exist[0]->getCourse();
                    if($form->get('activate')->isClicked()){
                        $em = $this->getDoctrine()->getManager();                       
                        $tra->setPayStatus("Paid");
                        $em->flush();
                        
                        //Use select statement to choose the authorization to give Student
                        if($tra->getTransType()=="Application"){
                            $user= new User();
                            $user->setEmail($exist[0]->getEmail());
                            $user->setIsActive(1);
                            $user->setPassword($exist[0]->getPassword());
                            $user->setUsername($exist[0]->getEmail());
                            $user->setRole("ROLE_STUDENT_APP");

                            $em = $this->getDoctrine()->getManager();
                            $em->persist($user);
                            $em->flush();
                        }else{
                            /*$user= new User();
                            $user->setEmail($exist[0]->getEmail());
                            $user->setIsActive(1);
                            $user->setPassword($exist[0]->getPassword());
                            $user->setUsername($exist[0]->getEmail());
                            $user->setRole("ROLE_STUDENT_EDIT");

                            $em = $this->getDoctrine()->getManager();
                            $em->persist($user);
                            $em->flush();*/
                        }
                        
                        
                        return $this->redirectToRoute("activate2"/*, array('appNo'=> $exist[0]->getAppNo())*/);
                        
                    }
                }else{
                    $errors[]="Student payment has already been activated.";
                }
                
            }else{
                $errors[]="Invoice number does not exist or payment has already been activated.";
            }
            
            
        }
        
        return $this->render('cashier/uploadpay.html.twig', array(
        'form' => $form->createView(), 'errors'=>$errors, 'validated'=>$validated,
                'invoiceNo'=>$invoiceNo,'msg'=>$msg,  'name'=>$name, 'programme'=>$programme, 'course'=>$course, 'email'=>$email));
    }
    
    /**
     * @Route("/activate2/", name="activate2")
     */
    
    public function nxtAction(Request $request){
        //return new Response("Got here");
        $errors=array(); $validated=""; $invoiceNo=""; $name=""; $email=""; $programme=""; $course=""; 
        
        $msg="Student Activated Succesfully.";
        $transaction = new Transaction();
        $form = $this->createFormBuilder($transaction, array('validation_groups' => array("confirm")
                    ))->add('invoiceNo', TextType::class)
                      ->add('validate', SubmitType::class, array('label' => 'Validate'))
                      ->add('activate', SubmitType::class, array('label' => 'Activate'))
                      ->setAction($this->generateUrl('activate'))
                      ->getForm();
        return $this->render('cashier/uploadpay.html.twig', array(
        'form' => $form->createView(), 'errors'=>$errors, 'validated'=>$validated,
                'invoiceNo'=>$invoiceNo,'msg'=>$msg, 'name'=>$name, 'programme'=>$programme, 'course'=>$course, 'email'=>$email));
    }
}
