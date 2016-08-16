<?php

namespace Emokykla\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EmokyklaTestBundle:Default:index.html.twig');
    }
}
