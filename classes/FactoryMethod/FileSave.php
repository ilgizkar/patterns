<?php

namespace FactoryMethod;

class FileSave implements ISave
{
    private $file_path;

    public function __construct($file_path)
    {
        $this->file_path = $file_path;
    }

    public function save($message)
    {
        file_put_contents($this->file_path, $message);
    }
}