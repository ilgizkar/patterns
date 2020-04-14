<?php

namespace Singleton;

class FileSave
{
    private $filePath;

    private static $instance = null;

    private function __construct()
    {
        $this->filePath = md5(microtime()).'.txt';
    }

    public static function getInstance() : FileSave
    {
        if(self::$instance === null) {
            self::$instance = new static();
        }
        return self::$instance;
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


