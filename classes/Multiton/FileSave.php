<?php

namespace Multiton;

class FileSave
{
    private $filePath;

    private static $instance = [];

    private function __construct($str)
    {
        $this->filePath = $str.'-'.md5(microtime()).'.txt';
    }

    public static function getInstance($str) : \Multiton\FileSave
    {
        if(!isset(self::$instance[$str])) {
            self::$instance[$str] = new static($str);
        }
        return self::$instance[$str];
    }

    public function save($dir)
    {
        $content = "text";
        if(file_exists($dir.'/'.$this->filePath)) {
            $content = file_get_contents('/'.$this->filePath) . $content;
        }

        file_put_contents('/'.$this->filePath, $content);
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
