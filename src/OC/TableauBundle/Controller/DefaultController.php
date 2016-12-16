<?php

namespace OC\TableauBundle\Controller;

use OC\TableauBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $article = new Article();

        return $this->render('OCTableauBundle:Default:index.html.twig', array(
            'tableau' => $article->getAll()
        ));
    }
    /*
    public function antispamAction()
    {

        $antispam = $this->get('oc_platform.antispam');
        echo $antispam->isSpam('bonjour');

        return $this->render('OCTableauBundle:Default:antispam.html.twig');
    }
    */
}

