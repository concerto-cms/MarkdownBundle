<?php

namespace ConcertoCms\MarkdownBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ConcertoCmsMarkdownBundle:Default:index.html.twig', array('name' => $name));
    }
}
