<?php

class Database_Controller extends Controller
{

    private $post;
    private $model;

    function __construct()
    {
        $this->post = $_POST;
        $this->model = new Model();
    }

    function getPostData(){

        $this->model->createData($this->post);
    }


}

?>