<?php

namespace _classes\Database;

use PDO;

class MySQL
{
    private $hostname;
    private $dbname;
    private $dbuser;
    private $dbpwd;
    private $db;

    public function __construct(
        $hostname = "localhost:8080",
        $dbname = "blog-project",
        $user = "root",
        $pwd = "root"
    ) {
        $this->hostname = $hostname;
        $this->dbname = $dbname;
        $this->dbuser = $user;
        $this->dbpwd = $pwd;
        $this->db = null;
    }

    public function connect()
    {
        $this->db = new PDO(
            "mysql:dbhost=$this->hostname;dbname=blog-project",
            $this->dbuser,
            $this->dbpwd,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ]
        );

        return $this->db;
    }
}
