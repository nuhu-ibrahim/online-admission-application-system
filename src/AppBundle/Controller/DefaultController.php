<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $user = $this->getUser();
        
        if($user){
            $role= $user->getRole();
            if($role=="ROLE_ADMIN"){
                return $this->render('home/indexAdmin.html.twig');
            }else{
                return $this->render('home/indexStudent.html.twig');
            }
        }else{
            return $this->render('home/index.html.twig');
        }
        
    }
}
