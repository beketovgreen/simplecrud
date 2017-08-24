<?php

class CreatePageController extends Controller
{
    function __construct()
    {

    }

    function getAction()
    {
        $this->model->create($_POST['inputName'], $_POST['inputSurname'], $_POST['inputEmail']);
    }
}
?>