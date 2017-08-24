<?php
class Controller{

    protected $model;

    function __construct()
    {
        $this->model = new Model();
    }

    function getAction(){
    }
}
?>