<?php

namespace TestHelper;

abstract class TestCase extends \PHPUnit_Extensions_Database_TestCase
{
    private $db;

    public function __construct()
    {
        $options = array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );

        $this->db = new \PDO(\MYSQL_SERVER_DSN, \DB_USER, \DB_PASS, $options);

    }

    public function getDatabase()
    {
        return $this->db;
    }

    public function getConnection()
    {
        return $this->createDefaultDBConnection($this->db, 'yesql');
    }
}
