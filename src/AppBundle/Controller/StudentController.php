<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StudentController extends Controller
{
    /**
     * @Route("/student", name="studentPage")
     */
    public function indexAction(Request $request)
    {    
        return $this->render('home/indexStudent.html.twig');
    }
}
