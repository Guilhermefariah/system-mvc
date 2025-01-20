<?php

namespace App\Models;

class BlogModel extends Conn 
{
    private object $conn;

    public function list()
    {
        $this->conn = $this->connect();
        $query_articles = "SELECT id, title, content FROM articles ORDER BY id DESC LIMIT 40";

        $result_articles = $this->conn->prepare($query_articles);
        $result_articles->execute();
        $return = $result_articles->fetchAll();

        return $return;
    }
}