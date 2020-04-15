<?php

use Singleton\FileSave;
use Multiton\FileSave as NewFileSave;

require "functions.php";
spl_autoload_register('project_autoload');

//$file = FileSave::getInstance();
//$file->save(__DIR__);

$file = NewFileSave::getInstance('mysql');
$file->save(__DIR__);