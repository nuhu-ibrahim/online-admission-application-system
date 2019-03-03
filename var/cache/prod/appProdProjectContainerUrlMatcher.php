<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/activate')) {
                // activate
                if ($pathinfo === '/activate') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ActivateController::newAction',  '_route' => 'activate',);
                }

                // activate2
                if (rtrim($pathinfo, '/') === '/activate2') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'activate2');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ActivateController::nxtAction',  '_route' => 'activate2',);
                }

            }

            if (0 === strpos($pathinfo, '/admi')) {
                // adminPage
                if ($pathinfo === '/admin') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'adminPage',);
                }

                // addStatus
                if ($pathinfo === '/admissionstatus') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdmissionController::indexAction',  '_route' => 'addStatus',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/printadmissionslip')) {
            // task_success6
            if (rtrim($pathinfo, '/') === '/printadmissionslip') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'task_success6');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdmissionController::nxtAction',  '_route' => 'task_success6',);
            }

            // task_success7
            if (rtrim($pathinfo, '/') === '/printadmissionslip2') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'task_success7');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdmissionController::nxtAction2',  '_route' => 'task_success7',);
            }

        }

        // continueReg
        if ($pathinfo === '/continue') {
            return array (  '_controller' => 'AppBundle\\Controller\\ContinueRegController::newAction',  '_route' => 'continueReg',);
        }

        if (0 === strpos($pathinfo, '/printSlip')) {
            // task_success9
            if ($pathinfo === '/printSlip') {
                return array (  '_controller' => 'AppBundle\\Controller\\ContinueRegController::nxtAction',  '_route' => 'task_success9',);
            }

            // task_success4
            if ($pathinfo === '/printSlip2') {
                return array (  '_controller' => 'AppBundle\\Controller\\ContinueRegController::nxtAction2',  '_route' => 'task_success4',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // download
        if ($pathinfo === '/downloadapplications') {
            return array (  '_controller' => 'AppBundle\\Controller\\DownloadApplicationController::indexAction',  '_route' => 'download',);
        }

        // editLog
        if ($pathinfo === '/adm') {
            return array (  '_controller' => 'AppBundle\\Controller\\ERegLoginController::indexAction',  '_route' => 'editLog',);
        }

        // task_success3
        if (rtrim($pathinfo, '/') === '/print_edit_slip') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'task_success3');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ERegLoginController::nxtAction',  '_route' => 'task_success3',);
        }

        // editReg
        if ($pathinfo === '/edit') {
            return array (  '_controller' => 'AppBundle\\Controller\\EditRegController::indexAction',  '_route' => 'editReg',);
        }

        // task_success2
        if ($pathinfo === '/printSlip3') {
            return array (  '_controller' => 'AppBundle\\Controller\\EditRegController::nxtAction',  '_route' => 'task_success2',);
        }

        // fullInfo
        if ($pathinfo === '/fullInfo') {
            return array (  '_controller' => 'AppBundle\\Controller\\FullInfoController::nxtAction',  '_route' => 'fullInfo',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\LoginController::indexAction',  '_route' => 'login',);
        }

        // startReg
        if ($pathinfo === '/start') {
            return array (  '_controller' => 'AppBundle\\Controller\\StartRegController::newAction',  '_route' => 'startReg',);
        }

        // task_success
        if (rtrim($pathinfo, '/') === '/print_slip') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'task_success');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\StartRegController::nxtAction',  '_route' => 'task_success',);
        }

        if (0 === strpos($pathinfo, '/student')) {
            // studentPage
            if ($pathinfo === '/student') {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::indexAction',  '_route' => 'studentPage',);
            }

            // studentinfo
            if ($pathinfo === '/studentinfo') {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentInfoController::indexAction',  '_route' => 'studentinfo',);
            }

        }

        // task_success5
        if (rtrim($pathinfo, '/') === '/print_full_info') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'task_success5');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\StudentInfoController::nxtAction',  '_route' => 'task_success5',);
        }

        // uploadlist
        if ($pathinfo === '/uploadlist') {
            return array (  '_controller' => 'AppBundle\\Controller\\UploadListController::indexAction',  '_route' => 'uploadlist',);
        }

        // success
        if (rtrim($pathinfo, '/') === '/admission_success') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'success');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UploadListController::nxtAction',  '_route' => 'success',);
        }

        // viewapp
        if ($pathinfo === '/viewapplications') {
            return array (  '_controller' => 'AppBundle\\Controller\\ViewApplicationController::indexAction',  '_route' => 'viewapp',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
