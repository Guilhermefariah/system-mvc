<?php

namespace App\Controllers;

class BlogController
{
    private array $data;

    public function index()
    {
        $listArticles = new \App\Models\BlogModel();
        $this->data["articles"] = $listArticles->list();

        $loadView = new \Core\ConfigView("Views/Blog/ListArticle", $this->data);

        $loadView->render();
    }
}
