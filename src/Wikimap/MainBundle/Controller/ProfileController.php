<?php

namespace Wikimap\MainBundle\Controller;

use FOS\UserBundle\Controller\ProfileController as BaseController;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends BaseController
{
    public function editAction()
    {
        $response = parent::editAction();

        return $response;
    }
}
