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

class FullInfoController extends Controller {

    /**
     * @Route("/fullInfo", name="fullInfo")
     */     
    public function nxtAction(Request $request) {
        $appNo=$request->query->get('appNo');
        $em = $this->getDoctrine()->getManager();
        $st = $em->getRepository('AppBundle:Student')->findOneBy(array('app_no' =>$appNo));
        
        return $this->render('admin/application_details.html.twig',array("sname" => $st->getSurname(), "fname" => $st->getFirstname(), "oname" => $st->getOthername(),
                        "dob" => $st->getDob(), "gender" => $st->getSex(),
                        "email" => $st->getEmail(), "phone" => $st->getMobile()
                        , "appNo" => $st->getAppNo(), "programme" => $st->getProgramme()
                        , "course" => $st->getCourse(), "inst" => $st->getInstName()
                        , "reg_no" => $st->getRegNo(), "qual" => $st->getQual(), 'field' => $st->getField(), 'img' => $st->getPassport()));
    }
}
