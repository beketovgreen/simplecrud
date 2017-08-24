<?php

class Starter
{
    private $controller, $model, $view;

    function __construct()
    {
        $this->controller   = new Controller();
        $this->model        = new Model();
        $this->view         = new View();
        Logger::getLog("The Controller started");
        Logger::getLog("The Model started");
        Logger::getLog("The View started");
    }

    function __destruct()
    {

    }

}


?>