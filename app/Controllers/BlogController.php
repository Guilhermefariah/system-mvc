<?php
namespace App\Controllers;

class BlogController 
{
    public function index()
    {
        echo "Blog! ";
        $listArticles = new \App\Models\BlogModel();
        $listArticles->list();
    }
}

