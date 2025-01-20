<?php

namespace Core;

class ConfigView
{
    private string $name;
    private array $data;

    public function __construct($name, array $data)
    {   
        $this->name = $name;
        $this->data = $data;
    }

    public function render()
    {
        if (file_exists("app/" . $this->name . ".php")) {
            include "app/" . $this->name . ".php";
        } else {
            echo "View não encontrada: {$this->name} <br>";
        }
    }
}