<?php

namespace App\Models;

use PDO;
use Exception;

class Conn
{
    private string $db = "mysql";
    private string $host = "localhost";
    private string $user = "root";
    private string $password = "";
    private string $dbname = "php";
    public int $port = 3306;
    public object $connect;

    public function connect()
    {
        try {
            $this->connect = new PDO(
                $this->db . ":host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbname, $this->user, $this->password
            );
            return $this->connect;

        } catch (Exception $ex) {
            die("Erro ao conectar ao banco de dados");
        }
    }
}
