<?php

class Logger
{
    private $log;

    function __construct($log)
    {
        $this->log = $log;
    }

    private function contentLog($content){

        echo "LOG: $content\n";
    }

    public static function getLog()
    {

    }

}

?>