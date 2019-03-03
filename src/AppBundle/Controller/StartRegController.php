<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Student;
use AppBundle\Entity\Transaction;
use AppBundle\Entity\Task;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class StartRegController extends Controller
{
    /**
     * @Route("/start", name="startReg")
     */
    public function newAction(Request $request)
    {        
        $student = new Student();
        $form = $this->createFormBuilder($student, array('validation_groups' => array("reg")
                    ))->add('programme', ChoiceType::class, array('choices'=>array(''=>'', 'Higher National Diploma - HND'=>'HND')))
                    ->add('course', ChoiceType::class, array('choices'=>array(''=>'',
                        'Computer Science'=>'Computer Science', 'Statistics'=>'Statistics', 'Mathematics'=>'Mathematics')))
                    ->add('surname', TextType::class)
                    ->add('firstname',TextType::class)
                    ->add('othername', TextType::class)
                    ->add('state', ChoiceType::class, array('choices' => array(''=>'', 'Federal Capital City'=>'Federal Capital City', 'Abia'=>'Abia',
                    'Adamawa'=>'Adamawa','Akwa Ibom'=>'Akwa Ibom','Anambra'=>'Anambra'
                    ,'Bauchi'=>'Bauchi','Bayelsa'=>'Bayelsa','Benue'=>'Benue',
                    'Borno'=>'Borno','Cross River'=>'Cross River','Delta'=>'Delta',
                    'Ebonyi'=>'Ebonyi','Edo'=>'Edo','Ekiti'=>'Ekiti','Enugu'=>'Enugu',
                    'Gombe'=>'Gombe','Imo'=>'Imo','Jigawa'=>'Jigawa','Kaduna'=>'Kaduna',
                    'Kano'=>'Kano','Kastina'=>'Kastina','Kebbi'=>'Kebbi','Kogi'=>'Kogi',
                    'Kwara'=>'Kwara','Lagos'=>'Lagos','Nassarawa'=>'Nassarawa','Niger'=>'Niger',
                    'Ogun'=>'Ogun','Ondo'=>'Ondo','Osun'=>'Osun','Oyo'=>'Oyo', 'Plateau'=>'Plateau', 
                    'Rivers'=>'Rivers', 'Sokoto'=>'Sokoto', 'Taraba'=>'Taraba', 'Yobe'=>'Yobe', 'Zamfara'=>'Zamfara')))
                    ->add('mobile', TextType::class)
                    ->add('email', TextType::class)
                    ->add('password', PasswordType::class)
                    ->add('submit', SubmitType::class, array('label' => 'Generate Invoice'))
                    ->getForm();
        $form->handleRequest($request);
        $errors=array();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
            "SELECT p
            FROM AppBundle:Student p
            WHERE p.email= :email "
            )->setParameter('email', $student->getEmail());
            $exist = $query->setMaxResults(1)->getResult();
            if(!$exist){
                //update App No
                $query = $em->createQuery(
                'SELECT MAX(p.id)
                FROM AppBundle:Student p');
                $stu = $query->setMaxResults(1)->getOneOrNullResult();
                $student->setAppNo('KPT/'.$student->getProgramme().'/2017'.($stu[1]+1));
                
                $em->persist($student);
                $em->flush();
            
                $transaction= new Transaction();
                
                $transaction->setAppNo($student->getAppNo());
                $transaction->setPayStatus("unpaid");
                $transaction->setTransType("Application");
                
                $query = $em->createQuery(
                'SELECT Max(p.id)
                FROM AppBundle:Transaction p');
                $tra = $query->setMaxResults(1)->getOneOrNullResult();
                $transaction->setInvoiceNo('2017000000'.($tra[1]+1));
                
                $em->persist($transaction);
                $em->flush();
                
                //Persist data to the studentRecordtbl and the transactiontbl
                
                return $this->redirectToRoute('task_success', 
                        array("name"=>$student->getFirstname()." ".$student->getSurname(),
                        "programme"=>$student->getProgramme(),
                        "email"=>$student->getEmail(), "phone"=>$student->getMobile(),
                        "invoice"=>$transaction->getInvoiceNo(), "appNo"=>$student->getAppNo())); 
            }
            $errors[]='Email already taken';
        }
        
        return $this->render('start_registration/index.html.twig', array(
        'form' => $form->createView(), 'errors'=>$errors));
    }
    
    /**
     * @Route("/print_slip/", name="task_success")
     */
    
    public function nxtAction(Request $request){
        return $this->render('start_registration/slip.html.twig',
            array('appNo'=>$request->query->get('appNo'),
                'name'=>$request->query->get('name'),
                "programme"=>$request->query->get('programme'),
                "email"=>$request->query->get('email'), "phone"=>$request->query->get('phone'),
                "invoice"=>$request->query->get('invoice')));
    }
}
