<?php

namespace FactoryMethod;

class FileSaveFactory implements ISaveFactory
{
    private $file_path;

    public function __construct(string $file_path)
    {
        $this->file_path = $file_path;
    }

    public function createSaver(): ISave
    {
        return new FileSave($this->file_path);
    }
}