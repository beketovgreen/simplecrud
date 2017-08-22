<?php

class Logger
{
    private $log;

    function __construct($log)
    {
        $this->log = $log;
    }

    private function output_template($content){
        echo "$this->log: "."\n";
        echo "$content\n";

    }

    public function get_draftcommands()
    {
        $this->output_template($_SERVER['REQUEST_URI']);
    }

}

?>