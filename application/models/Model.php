<?php

class Model implements ModelInterface
{

    private $database;
    private $data;

    function __construct()
    {
        $this->database = new Database();

    }

    function createData($d)
    {
        $this->database->create();
    }

    function deleteData($d)
    {
    }

    function updateData($d)
    {
    }

   function readData($d)
    {
    }

    function getData($d)
    {
    }
}
?>