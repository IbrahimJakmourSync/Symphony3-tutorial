<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenusController extends Controller{

    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName){

        return $this->render('genus/show.html.twig',[
            'name'=>$genusName
        ]);
    
    }
}

?>