<?php
namespace App\Controllers;


use Slim\Slim;

/**
 * Class BaseController
 * @package App\Controllers
 */
class BaseController {

    /**
     * @var \Slim\Slim
     */
    protected $app;

    /**
     * @var \Slim\View
     */
    protected $view;

    function __construct()
    {
        $this->app = Slim::getInstance();
        $this->view = $this->app->view();
    }


}