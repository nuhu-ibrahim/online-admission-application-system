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

class StudentInfoController extends Controller
{
    /**
     * @Route("/studentinfo", name="studentinfo")
     */
    public function indexAction(Request $request)
    {   
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        
        $errors=array();
        $stu= new Student();
        $form = $this->createFormBuilder($stu, array('validation_groups' => array("val2")))
                ->add('app_no', TextType::class)
                ->add('submit', SubmitType::class, array('label' => 'View Information'))
                ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $student = $em->getRepository('AppBundle:Student')->findOneBy(array('app_no'=>$stu->getAppNo()));
            if($student){
                $validator = $this->get('validator');
                $err = $validator->validate($student, null, array('strict'));
                if(count($err)!=0){
                    $errors[]="Student has not complete registration.";
                }else{
                    //Render the student's full information
                    return $this->redirectToRoute('task_success5', array("sname" => $student->getSurname(), "fname" => $student->getFirstname(), "oname" => $student->getOthername(),
                        "dob" => $student->getDob(), "gender" => $student->getSex(),
                        "email" => $student->getEmail(), "phone" => $student->getMobile()
                        , "appNo" => $student->getAppNo(), "programme" => $student->getProgramme()
                        , "course" => $student->getCourse(), "inst_name" => $student->getInstName()
                        , "reg_no" => $student->getRegNo(), "qual" => $student->getQual(), 'field' => $student->getField(), 'pass' => $student->getPassport()));
                }
            }else{
                $errors[]="Application Number does not match";
            }
        }
        return $this->render('admin/viewInfo.html.twig', array(
        'form' => $form->createView(), 'errors'=>$errors));
    }
    
    /**
     * @Route("/print_full_info/", name="task_success5")
     */
    
    public function nxtAction(Request $request){
        return $this->render('admin/application_details.html.twig', array("sname" => $request->query->get("sname"), "oname" => $request->query->get("oname")
                    , "fname" => $request->query->get("fname"),
                    "dob" => $request->query->get("dob"), "gender" => $request->query->get("gender"),
                    "email" => $request->query->get("email"), "phone" => $request->query->get("phone")
                    , "appNo" => $request->query->get("appNo"), "programme" => $request->query->get("programme")
                    , "course" => $request->query->get("course"), "inst" => $request->query->get("inst_name")
                    , "reg_no" => $request->query->get("reg_no"), "qual" => $request->query->get("qual"),
                    'field' => $request->query->get('field'), 'img' => $request->query->get('pass')));
    }
}
