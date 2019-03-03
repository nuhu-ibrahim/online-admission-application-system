<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ViewApplicationController extends Controller
{
    /**
     * @Route("/viewapplications", name="viewapp")
     */
    public function indexAction(Request $request)
    {    
        $array=array();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT p
            FROM AppBundle:Student p
            ORDER by p.course, p.surname, p.firstname, p.othername ASC');
            $students = $query->getResult();
            $validator = $this->get('validator');
            foreach( $students as $st ){
                $errors = $validator->validate($st, null, array('strict'));
                if(count($errors)==0){
                    $array[]=$st;
                }
            }
        return $this->render('admin/view_applications.html.twig', array('students'=>$array));
    }
}
