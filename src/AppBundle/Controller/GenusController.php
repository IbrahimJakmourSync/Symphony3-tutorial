<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenusController extends Controller{

    /**
     * @Route("/genus/{genusName}",name="genus_show_notes")
     */
    public function showAction($genusName){

        return $this->render('genus/show.html.twig',[
            'name'=>$genusName,
        ]);
    }

    /**
     * @Route("/genus/{genusName}/notes ")
     * @Method("GET")
     */
    public function getNotesAction(){
        $notes=[
            ['id'=>1,'username' =>'AquaPelham','avatarUri'=>'/images/leanna.jpeg','note'=>"Lorem ipsum dolor sit amet.",'date'=>'Dec 10 2019'],
            ['id'=>2,'username' =>'AquaWeaver','avatarUri'=>'/images/ryan.jpeg','note'=>"Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.",'date'=>'Dec 14 2019'],
            ['id'=>3,'username' =>'AquaPelham','avatarUri'=>'/images/leanna,jpeg','note'=>"Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.,'date'=>'Dec 13 2019'"]
        ];

        $data=[
            'notes'=>$notes,
        ];

        // return new Response(json_encode($data));
        return new JsonResponse($data);
    }
}

?>