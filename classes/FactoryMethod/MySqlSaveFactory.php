<?php

namespace FactoryMethod;

class MySqlSaveFactory implements ISaveFactory
{
    private $host, $user, $pass, $db;

    public function __construct($host, $user, $pass, $db)
    {
        $this->db = $db;
        $this->pass = $pass;
        $this->user = $user;
        $this->host = $host;
    }

    public function createSaver(): ISave
    {
        return new MySqlSave($this->host, $this->user, $this->pass, $this->db);
    }
}