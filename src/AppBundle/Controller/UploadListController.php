<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\AdmissionList;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class UploadListController extends Controller
{
    /**
     * @Route("/uploadlist", name="uploadlist")
     */
    public function indexAction(Request $request)
    {    
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        $file= new File();
        $errors= array();
        $success="";
        $form = $this->createFormBuilder($file)
                ->add('file', FileType::class)
                ->add('submit', SubmitType::class, array('label' => 'Upload List'))
                ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = array();
            $fileName=$form['file']->getData();
            $name= $fileName->getClientOriginalName();
            $ext= substr(strrchr($name, '.'), 1);

            if ($ext=="xls" || $ext=="xlsx"){
                $handle= @fopen($fileName, "r");
                $first_row=true;
                $lineNo=1;
                while (($buffer = fgets($handle)) !== false){
                    if ( !$first_row ){
                        $student= new AdmissionList();
                        $appNo="";
                        $programme="";
                        $course="";
                        $surname="";
                        $othername="";
                        $firstname="";
                        $email="";
                        $sex="";
                        $state="";
                        $mStatus="";
                        $instName="";
                        $regNo="";
                        $qual="";
                        $field="";

                        $index = 1;
                        $cells = explode("\t", $buffer);

                        foreach( $cells as $cell ){
                            if ( $index == 1 ) 
                                    $appNo = $cell;//->nodeValue;
                            if ( $index == 2 ) 
                                    $programme = $cell;//->nodeValue;
                            if ( $index == 3 ) 
                                    $course = $cell;//->nodeValue;
                            if ( $index == 4 ) 
                                    $surname = $cell;//->nodeValue;
                            if ( $index == 5 ) 
                                    $othername = $cell;//->nodeValue;
                            if ( $index == 6 ) 
                                    $firstname = $cell;//->nodeValue;
                            if ( $index == 7 ) 
                                    $email = $cell;//->nodeValue;
                            if ( $index == 8 ) 
                                    $sex = $cell;//->nodeValue;
                            if ( $index == 9 ) 
                                    $state = $cell;//->nodeValue;
                            if ( $index == 10 ) 
                                    $mStatus = $cell;//->nodeValue;
                            if ( $index == 11 ) 
                                    $instName = $cell;//->nodeValue;
                            if ( $index == 12 ) 
                                    $regNo = $cell;//->nodeValue;
                            if ( $index == 13 ) 
                                    $qual = $cell;//->nodeValue;
                            if ( $index == 14 ) 
                                    $field = $cell;//->nodeValue;

                            $index += 1;
                        }

                        $student->setAppNo(str_replace('"',"",$appNo));
                        $student->setProgramme(str_replace('"',"",$programme));
                        $student->setCourse(str_replace('"',"",$course));
                        $student->setSurname(str_replace('"',"",$surname));
                        $student->setOthername(str_replace('"',"",$othername));
                        $student->setFirstname(str_replace('"',"",$firstname));
                        $student->setEmail(str_replace('"',"",$email));
                        $student->setSex(str_replace('"',"",$sex));
                        $student->setState(str_replace('"',"",$state));
                        $student->setMstatus(str_replace('"',"",$mStatus));
                        $student->setInstName(str_replace('"',"",$instName));
                        $student->setRegNo(str_replace('"',"",$regNo));
                        $student->setQual(str_replace('"',"",$qual));
                        $student->setField(str_replace('"',"",$field));

                        $validator = $this->get('validator');
                        $err = $validator->validate($student, null, array('strict3'));
                        if(count($err)==0){
                            $data[] = $student;
							
                        }else{
                            $errors[]="Student's data on Line ".$lineNo." is invalid.";
                            break;
                        }
                    }
                    $first_row = false;
                    $lineNo++;
                }
				
                if(count($errors)==0){
                    //Upload to database and redirect
                    foreach($data as $da){
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($da);
                        $em->flush();
                        
                        $img="C:\xampp\htdocs\online_admission_application\web\passports\20171";
                        $em = $this->getDoctrine()->getManager();
                        $tr = $em->getRepository('AppBundle:Student')->findOneByEmail($da->getEmail());
                        /*
                        $surname=(string)$da->getSurname();
                        $othername=(string)$da->getOthername();
                        $firstname=(string)$da->getFirstname();
                        $email=(string)$da->getEmail();
                        $course=(string)$da->getCourse();
                        $dept=(string)$da->getCourse();
                        $programme=(string)$da->getProgramme();
                        try{
                            $message = \Swift_Message::newInstance()
                            ->setSubject("Congratulations ". str_replace('"',"", "$surname $firstname $othername"))
                            ->setFrom('nuhurainmaker@gmail.com')
                            ->setTo(str_replace('"',"",$da->getEmail()))
                            ->setBody($this->renderView('emails/admission.html.twig',
                                    array('name' => str_replace('"',"", "$surname $firstname $othername"),
                                        "course"=>str_replace('"',"",$course), "dept"=>str_replace('"',"", $dept), 'programme'=>str_replace('"',"",$programme), 'img'=>str_replace('"',"",$img))),'text/html');
                            $this->get('mailer')->send($message);
                        }catch(Exception $ex){
                            
                        }*/
                    }
                    return $this->redirectToRoute("success");
                }
            }else{
                $errors[]="Uploaded file is not a valid excel file.";
            }
        }
        return $this->render('admin/uploadlist.html.twig', array(
        'form' => $form->createView(), 'errors'=>$errors, 'success'=>$success));
    }
    
    /**
     * @Route("/admission_success/", name="success")
     */
    
    public function nxtAction(Request $request){
        $success="true";
        $file= new File();
        $errors= array();
        $form = $this->createFormBuilder($file)
                ->add('file', FileType::class)
                ->add('submit', SubmitType::class, array('label' => 'Upload List'))
                ->setAction($this->generateUrl('uploadlist'))
                ->getForm();
        return $this->render('admin/uploadlist.html.twig', array(
        'form' => $form->createView(), 'errors'=>$errors, 'success'=>$success));
    }
    
}