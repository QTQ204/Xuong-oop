<?php

namespace Quang\Xuongoop\Commons;

use Doctrine\DBAL\DriverManager;

class Model{

    


    protected DriverManager|null $conn;

    public function __construct()
    {
        $connectionParams = [
            'dbname'    => $_ENV['DB_NAME'],
            'user'      => $_ENV['DB_USERNAME'],
            'password'  => $_ENV['DB_PASSWORD'],
            'host'      => $_ENV['DB_HOST'],
            'port'      => $_ENV['DB_PORT'],
            'driver'    => $_ENV['DB_DRIVER'],
        ];

        $this->conn = DriverManager::getConnection($connectionParams);
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
