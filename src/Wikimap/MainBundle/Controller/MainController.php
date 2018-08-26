<?php

namespace Wikimap\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('WikimapMainBundle:Main:index.html.twig');
    }
    
    public function forumAction()
    {
        return $this->render('WikimapMainBundle:Main:forum.html.twig');
    }
}
