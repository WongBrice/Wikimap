<?php

namespace Wikimap\MainBundle\Controller;

use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends BaseController 
{
    public function registerAction() 
    {
        $response = parent::registerAction();

        return $response;
    }
}
