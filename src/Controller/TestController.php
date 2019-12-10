<?php
/**
 * Created by PhpStorm.
 * User: ykchaou
 * Date: 06/12/2019
 * Time: 09:30
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

    /**
     * @Route("/yassine/test", name="yassine_test")
     */
    public function test(): Response
    {

        return new  Response('test yassine !! ') ;

    }


}