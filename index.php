<?php

use Singleton\FileSave;
use Multiton\FileSave as MultiFileSave;
use StaticFactory\StaticFactory;
use FactoryMethod\MySqlSaveFactory;
use FactoryMethod\FileSaveFactory;

require "functions.php";
spl_autoload_register('project_autoload');

/**
 * FactoryMethod
 */
$factory = new FileSaveFactory('testFile.txt');
$factory->createSaver()->save('Hello world!');

$factory = new MySqlSaveFactory('127.0.0.1', 'root', '', 'patterns');
$factory->createSaver()->save('Hello world!');
/**
 * Singleton
 */
//$file = FileSave::getInstance();
//$file->save(__DIR__);

/**
 * Multiton
 */
//$file = MultiFileSave::getInstance('mysql');
//$file->save(__DIR__);

/**
 * StaticFactory
 */
//$obj = StaticFactory::create('\StaticFactory\FactoryClass');
//$obj->save();