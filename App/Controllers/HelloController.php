<?php

namespace App\Controllers;


use Slim\Slim;

class HelloController extends BaseController {

    public function hello($name){
        $this->view->set('name', $name);
        $this->app->render('hello.twig');
    }

}