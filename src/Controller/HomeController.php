<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 11/02/2019
 * Time: 10:50
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
     /**
     * @Route("/")
     * */
    public function homepage()
    {
        return new Response("OMG this is my fist page symfony");
    }

    /**
     * @Route("/article/mon_article")
     * */
    public function read()
    {
        return new Response("voici mon article");
    }
}