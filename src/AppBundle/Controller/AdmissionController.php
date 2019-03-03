<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Student;
use AppBundle\Entity\AdmissionList;
use AppBundle\Entity\Transaction;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AdmissionController extends Controller
{
    /**
     * @Route("/admissionstatus", name="addStatus")
     */
    public function indexAction(Request $request)
    {   
        $errors=array();
        $user = $this->getUser();
        if($user){
            $email = $user->getEmail();
            $em = $this->getDoctrine()->getManager();
            $student = new AdmissionList();
            $st = $em->getRepository('AppBundle:Student')->findOneByEmail($email);
            $student->setAppNo($st->getAppNo());
            
            $form = $this->createFormBuilder($student, array('validation_groups' => array("al")))
                    ->add('app_no', TextType::class, array('disabled' => 'true'))
                    ->add('submit', SubmitType::class, array('label' => 'Check Admission Status'))
                    ->getForm();
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $adm = $em->getRepository('AppBundle:AdmissionList')->findOneBy(array("app_no"=>$student->getAppNO()));
                if($adm){
                    $em = $this->getDoctrine()->getManager();
                    $sea = $em->getRepository('AppBundle:Student')->findOneBy(array("app_no"=>$student->getAppNO()));
            
                    $surname=(string)$adm->getSurname();
                    $othername=(string)$adm->getOthername();
                    $firstname=(string)$adm->getFirstname();
                    $email=(string)$adm->getEmail();
                    $course=(string)$adm->getCourse();
                    $dept=(string)$adm->getCourse();
                    $programme=(string)$adm->getProgramme();
                    $img=(string)$sea->getPassport();
                    return $this->redirectToRoute('task_success6', 
                        array('name' => str_replace('"',"", "$surname $firstname $othername"),
                            "course"=>str_replace('"',"",$course), 
                            "dept"=>str_replace('"',"", $dept), 
                            'programme'=>str_replace('"',"",$programme), 
                            'img'=>str_replace('"',"",$img)));
                }else{
                    $errors[]="No admission exist for this application number yet, please check again later.";
                }
            }
            return $this->render('home/ucheckAdmission.html.twig', array(
                'form' => $form->createView(), 'errors'=>$errors));
        }else{
            $student= new AdmissionList();
           
            $form = $this->createFormBuilder($student, array('validation_groups' => array("al")))
                    ->add('app_no', TextType::class)
                    ->add('submit', SubmitType::class, array('label' => 'Check Admission Status'))
                    ->getForm();  
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $adm = $em->getRepository('AppBundle:AdmissionList')->findOneBy(array("app_no"=>$student->getAppNO()));
                if($adm){
                    $em = $this->getDoctrine()->getManager();
                    $sea = $em->getRepository('AppBundle:Student')->findOneBy(array("app_no"=>$student->getAppNO()));
            
                    $surname=(string)$adm->getSurname();
                    $othername=(string)$adm->getOthername();
                    $firstname=(string)$adm->getFirstname();
                    $email=(string)$adm->getEmail();
                    $course=(string)$adm->getCourse();
                    $dept=(string)$adm->getCourse();
                    $programme=(string)$adm->getProgramme();
                    $img=(string)$sea->getPassport();
                    return $this->redirectToRoute('task_success7', 
                        array('name' => str_replace('"',"", "$surname $firstname $othername"),
                            "course"=>str_replace('"',"",$course), 
                            "dept"=>str_replace('"',"", $dept), 
                            'programme'=>str_replace('"',"",$programme), 
                            'img'=>str_replace('"',"",$img)));
                }else{
                    $errors[]="No admission exist for this application number yet, please check again later.";
                }
            }
            return $this->render('home/checkAdmission.html.twig', array(
                'form' => $form->createView(), 'errors'=>$errors));
        }
    }
    
    /**
     * @Route("/printadmissionslip/", name="task_success6")
     */
    
    public function nxtAction(Request $request){
        $name=(string)$request->query->get('name');
        $course=(string)$request->query->get('course');
        $dept=(string)$request->query->get('dept');
        $programme=(string)$request->query->get('programme');
        $img=(string)$request->query->get('img');
        
        return $this->render('home/uadmission.html.twig',
            array('name' => str_replace('"',"",$name),
                "course"=>str_replace('"',"",$course), 
                "dept"=>str_replace('"',"",$dept),
                'programme'=>str_replace('"',"",$programme), 
                'img'=>str_replace('"',"",$img)));
    }
    
    /**
     * @Route("/printadmissionslip2/", name="task_success7")
     */
    
    public function nxtAction2(Request $request){
        
        $name=(string)$request->query->get('name');
        $course=(string)$request->query->get('course');
        $dept=(string)$request->query->get('dept');
        $programme=(string)$request->query->get('programme');
        $img=(string)$request->query->get('img');
        
        return $this->render('home/admission.html.twig',
            array('name' => str_replace('"',"",$name),
                "course"=>str_replace('"',"",$course), 
                "dept"=>str_replace('"',"",$dept),
                'programme'=>str_replace('"',"",$programme), 
                'img'=>str_replace('"',"",$img)));
    }
}
