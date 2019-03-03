<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Student;
use AppBundle\Entity\Transaction;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaTypeType;

class ContinueRegController extends Controller {

    /**
     * @Route("/continue", name="continueReg")
     */
    public function newAction(Request $request) {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $this->denyAccessUnlessGranted('ROLE_STUDENT_APP', null, 'Unable to access this page!');
        
        $user = $this->getUser();
        $email = $user->getEmail();
        
        $student = new Student;
        $em = $this->getDoctrine()->getManager();
        $st = $em->getRepository('AppBundle:Student')->findOneByEmail(/* "kkkkkkkk@yy.nuj"*/$email);
        
        $validator = $this->get('validator');
        $err = $validator->validate($st, null, array('strict'));
        if(count($err)==0){
            //If User has already completed transaction before, give him a message and show him a link to go back to the home page
            return $this->redirectToRoute('task_success4', array("sname" => $st->getSurname(), "fname" => $st->getFirstname(), "oname" => $st->getOthername(),
                        "dob" => $st->getDob(), "gender" => $st->getSex(),
                        "email" => $st->getEmail(), "phone" => $st->getMobile()
                        , "appNo" => $st->getAppNo(), "programme" => $st->getProgramme()
                        , "course" => $st->getCourse(), "inst_name" => $st->getInstName()
                        , "reg_no" => $st->getRegNo(), "qual" => $st->getQual()
                        , 'field' => $st->getField(), 'pass' => $st->getPassport()));
        }
        $student->setProgramme($st->getProgramme());
        $student->setCourse($st->getCourse());
        $student->setFirstname($st->getFirstname());
        $student->setSurname($st->getSurname());
        $student->setMobile($st->getMobile());
        $student->setEmail($st->getEmail());
        $student->setOthername($st->getOthername());
        $student->setAppNo($st->getAppNo());
        $student->setState($st->getState());
        $form = $this->createFormBuilder($student, array('validation_groups' => array("strict")))
                ->add('programme', ChoiceType::class, array('choices'=>array(''=>'', 'Higher National Diploma - HND'=>'HND'), 'disabled' => 'true'))
                ->add('course', ChoiceType::class, array('disabled' => 'true', 'choices'=>array(''=>'',
                    'Computer Science'=>'Computer Science', 'Statistics'=>'Statistics', 'Mathematics'=>'Mathematics')))
                ->add('appNo', TextType::class, array('disabled' => 'true'))
                ->add('surname', TextType::class, array('disabled' => 'true'))
                ->add('firstname', TextType::class, array('disabled' => 'true'))
                ->add('othername', TextType::class, array('disabled' => 'true'))
                ->add('dob', TextType::class)//, array('widget'=>'single_text', 'html5'=>false))
                ->add('sex', ChoiceType::class, array('choices' => array('' => '', 'Male' => 'Male', 'Female' => 'Female')))
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
                ->add('mstatus', ChoiceType::class, array('choices' => array('' => '', 'Single' => 'Single', 'Married' => 'Married', 'Divorced' => 'Divorced')))
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
                ->add('mobile', TextType::class, array('disabled' => 'true'))
                ->add('email', TextType::class, array('disabled' => 'true'))
                ->add('passport', FileType::class)
                ->add('inst_name', TextType::class)
                ->add('location', TextType::class)
                ->add('reg_no', TextType::class)
                ->add('date_of_grad', TextType::class)//, array('widget'=>'single_text', 'html5'=>false))
                ->add('qual', TextType::class)
                ->add('field', TextType::class)
                ->add('submit', SubmitType::class, array('label' => 'Submit'))
                ->getForm();
        $form->handleRequest($request);
        $errors = array();
        $fname = $st->getFirstname();
        $mname = $st->getOthername();
        $sname = $st->getSurname();
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
            $st->setRegNo($student->getRegNo());

            //Move passport file to another directory and update
            $pass= $student->getPassport();
            //$directory="C:\\xampp\\htdocs\\online_admission_application\\web\\"passports";
            $directory="passports";
            $file=$pass->move($directory, $student->getAppNo());
            $st->setPassport($file);
            $student->setPassport($file);
            $em->flush();
            //Redirect to Route where User can Print Application Details
            return $this->redirectToRoute('task_success9', array("sname" => $student->getSurname(), "fname" => $student->getFirstname(), "oname" => $student->getOthername(),
                        "dob" => $student->getDob(), "gender" => $student->getSex(),
                        "pass" => "$file",
                        "email" => $student->getEmail(), "phone" => $student->getMobile()
                        , "appNo" => $student->getAppNo(), "programme" => $student->getProgramme()
                        , "course" => $student->getCourse(), "inst_name" => $student->getInstName()
                        , "reg_no" => $student->getRegNo(), "qual" => $student->getQual()
                        ,'field' => $student->getField()));
        }
        return $this->render('continue_registration/fullInfo.html.twig', array(
                    'form' => $form->createView(), 'errors' => $errors, 'fname' => $fname, 'mname' => $mname, 'sname' => $sname, 'email' => $email));
    }

    /**
     * @Route("/printSlip", name="task_success9")
     */
    public function nxtAction(Request $request) {
        return $this->render('continue_registration/application_details.html.twig', array("sname" => $request->query->get("sname"), "oname" => $request->query->get("oname")
                    , "fname" => $request->query->get("fname"),
                    "dob" => $request->query->get("dob"), "gender" => $request->query->get("gender"),
                    "email" => $request->query->get("email"), "phone" => $request->query->get("phone")
                    , "appNo" => $request->query->get("appNo"), "programme" => $request->query->get("programme")
                    , "course" => $request->query->get("course"), "inst" => $request->query->get("inst_name")
                    , "reg_no" => $request->query->get("reg_no"), "qual" => $request->query->get("qual"),
                    'field' => $request->query->get('field'), 'img' => $request->query->get("pass")));
    }
    
    /**
     * @Route("/printSlip2", name="task_success4")
     */
    public function nxtAction2(Request $request) {
        return $this->render('continue_registration/application_details2.html.twig', array("sname" => $request->query->get("sname"), "oname" => $request->query->get("oname")
                    , "fname" => $request->query->get("fname"),
                    "dob" => $request->query->get("dob"), "gender" => $request->query->get("gender"),
                    "email" => $request->query->get("email"), "phone" => $request->query->get("phone")
                    , "appNo" => $request->query->get("appNo"), "programme" => $request->query->get("programme")
                    , "course" => $request->query->get("course"), "inst" => $request->query->get("inst_name")
                    , "reg_no" => $request->query->get("reg_no"), "qual" => $request->query->get("qual"),
                    'field' => $request->query->get('field'), 'img' => $request->query->get('pass')));
    }

}
