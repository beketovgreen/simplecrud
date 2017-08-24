<?php

class CreatePageController implements Controller
{
    private $model;

    function __construct()
    {
        $this->model = new Model();
    }

    function getAction()
    {
        $this->model->create($_POST['inputName'], $_POST['inputSurname'], $_POST['inputEmail']);
    }
}
?>