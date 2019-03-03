<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Student;
use AppBundle\Entity\Transaction;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaTypeType;

class EditRegController extends Controller
{
    /**
     * @Route("/edit", name="editReg")
     */
    public function indexAction(Request $request)
    {
        if(!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $this->denyAccessUnlessGranted('ROLE_STUDENT_APP', null, 'Unable to access this page!');
        $user = $this->getUser();
        
        $email=$user->getEmail();
        $em = $this->getDoctrine()->getManager();
        $st = $em->getRepository('AppBundle:Student')->findOneByEmail(/*"kkkkkkkk@yy.vu"*/$email);
        
        $student= new Student();
        
        //$student->setCourse($student1[0]->getCourse());
        $student->setProgramme($st->getProgramme());
        $student->setCourse($st->getCourse());
        $student->setAppNo($st->getAppNo());
        $student->setSurname($st->getSurname());
        $student->setFirstname($st->getFirstname());
        $student->setOthername($st->getOthername());
        $student->setDob($st->getDob());
        $student->setSex($st->getSex());
        $student->setState($st->getState());
        $student->setHometown($st->getHometown());
        $student->setMstatus($st->getMstatus());
        $student->setDisability($st->getDisability());
        $student->setAddress($st->getAddress());
        $student->setNxtsname($st->getNxtsname());
        $student->setNxtfname($st->getNxtfname());
        $student->setNxtoname($st->getNxtoname());
        $student->setNxtmobile($st->getNxtmobile());
        $student->setNxtrel($st->getNxtrel());
        $student->setExtraAct($st->getExtraAct());
        $student->setScholarshipMeans($st->getScholarshipMeans());
        $student->setScholarshipDonorName($st->getScholarshipDonorName());
        $student->setMobile($st->getMobile());
        $student->setEmail($st->getEmail());
        $student->setInstName($st->getInstName());
        $student->setLocation($st->getLocation());
        $student->setRegNo($st->getRegNo());
        $student->setDateOfGrad($st->getDateOfGrad());
        $student->setQual($st->getQual());
        $student->setField($st->getField());
        
        $student->setSex($st->getSex());
        $form = $this->createFormBuilder($student, array('validation_groups' => array("strict2")))
                    ->add('programme', ChoiceType::class, array('choices'=>array(''=>'', 'Higher National Diploma - HND'=>'HND'), 'disabled' => 'true'))
                    ->add('course', ChoiceType::class, array('choices'=>array(''=>'',
                        'Computer Science'=>'Computer Science', 'Statistics'=>'Statistics', 'Mathematics'=>'Mathematics')))
                    ->add('appNo', TextType::class, array('disabled' => 'true'))
                    ->add('surname', TextType::class, array('disabled' => 'true'))
                    ->add('firstname', TextType::class, array('disabled' => 'true'))
                    ->add('othername', TextType::class, array('disabled' => 'true'))
                    ->add('dob', TextType::class)//, array('widget'=>'single_text', 'html5'=>false))
                    ->add('sex', ChoiceType::class, array('choices'=>array(''=>'','Male'=>'Male' ,'Female'=>'Female')))
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
                    ->add('hometown', TextType::class)
                    ->add('mstatus', ChoiceType::class, array('choices'=>array(''=>'', 'Single'=>'Single', 'Married'=>'Married', 'Divorced'=>'Divorced')))
                    ->add('disability', TextType::class)
                    ->add('address', TextType::class)
                    ->add('nxtsname', TextType::class)
                    ->add('nxtfname', TextType::class)
                    ->add('nxtoname', TextType::class)
                    ->add('nxtmobile', TextType::class)
                    ->add('nxtrel', TextType::class)
                    ->add('extra_act', TextType::class)
                    ->add('scholarship_means', TextType::class)
                    ->add('scholarship_donor_name', TextType::class)
                    ->add('mobile', TextType::class, array('disabled'=>'true'))
                    ->add('email', TextType::class, array('disabled'=>'true'))
                    ->add('inst_name', TextType::class)
                    ->add('location', TextType::class)
                    ->add('reg_no', TextType::class)
                    ->add('date_of_grad', TextType::class)//, array('widget'=>'single_text', 'html5'=>false))
                    ->add('qual', TextType::class)
                    ->add('field', TextType::class)
                    ->add('submit', SubmitType::class, array('label' => 'Submit'))
                    ->getForm();
        $form->handleRequest($request);
        $errors=array(); $fname=$st->getFirstname(); $mname=$st->getOthername(); $sname=$st->getSurname(); $email=$st->getEmail();
        if ($form->isSubmitted() && $form->isValid()) {
            $st->setDob($student->getDob());
            $st->setDateOfGrad($student->getDateOfGrad());
            $st->setSex($student->getSex());
            $st->setState($student->getState());
            $st->setHometown($student->getHometown());
            $st->setMstatus($student->getMstatus());
            $st->setDisability($student->getDisability());
            $st->setAddress($student->getAddress());
            $st->setNxtsname($student->getNxtsname());
            $st->setNxtoname($student->getNxtoname());
            $st->setNxtfname($student->getNxtfname());
            $st->setNxtmobile($student->getNxtmobile());
            $st->setNxtrel($student->getNxtrel());
            $st->setExtraAct($student->getExtraAct());
            $st->setScholarshipMeans($student->getScholarshipMeans());
            $st->setScholarshipDonorName($student->getScholarshipDonorName());
            $st->setInstName($student->getInstName());
            $st->setLocation($student->getLocation());
            $st->setQual($student->getQual());
            $st->setField($student->getField());
            
            //Move passport file to another directory and update
            $em->flush();
            
            /*Delete User from database    
            $us = $em->getRepository('AppBundle:User')->findOneByEmail($email);
            $em->remove($us);
            $em->flush();*/
            
            //Delete the transaction
            $tr = $em->getRepository('AppBundle:Transaction')->findOneBy((array('app_no' =>$st->getAppNo(), 'pay_status' => 'paid', 'trans_type'=>'Edit')));
            $em->remove($tr);
            $em->flush();
            //Redirect to Route where User can Print Application Details
            return $this->redirectToRoute('task_success2', 
                    array("sname"=>$student->getSurname(),"fname"=>$student->getFirstname(),"oname"=>$student->getOthername(),
                    "dob"=>$student->getDob(), "gender"=>$student->getSex(),
                    "email"=>$student->getEmail(), "phone"=>$student->getMobile()
                    , "appNo"=>$student->getAppNo(), "programme"=>$student->getProgramme()
                    , "course"=>$student->getCourse(), "inst_name"=>$student->getInstName()
                    ,"reg_no"=> $student->getRegNo(), "qual"=>$student->getQual(), 'field'=>$student->getField(), 'pass'=>$student->getPassport())); 
        }
        
        return $this->render('edit_registration/fullInfo.html.twig', array(
        'form' => $form->createView(), 'errors'=>$errors, 'fname'=>$fname, 'mname'=>$mname, 'sname'=>$sname, 'email'=>$email));
    }
    
    /**
     * @Route("/printSlip3", name="task_success2")
     */
    
    public function nxtAction(Request $request){
        return $this->render('continue_registration/application_details.html.twig',
                array("sname"=>$request->query->get("sname"),"oname"=>$request->query->get("oname")
                ,"fname"=>$request->query->get("fname"),
                    "dob"=>$request->query->get("dob"), "gender"=>$request->query->get("gender"),
                    "email"=>$request->query->get("email"), "phone"=>$request->query->get("phone")
                    , "appNo"=>$request->query->get("appNo"), "programme"=>$request->query->get("programme")
                    , "course"=>$request->query->get("course"), "inst"=>$request->query->get("inst_name")
                    ,"reg_no"=> $request->query->get("reg_no"), "qual"=>$request->query->get("qual"),
                'field'=>$request->query->get('field'), 'img'=>$request->query->get('pass'))); 
    }
}
