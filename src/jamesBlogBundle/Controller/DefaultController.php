<?php

namespace jamesBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('jamesBlogBundle:Default:index.html.twig');
    }

    public function page2Action()
    {
        return $this->render('jamesBlogBundle:Default:page2.html.twig');
    }
}
