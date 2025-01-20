<?php
namespace Core;

class ConfigController 
{
    public function __construct()
    {
        echo filter_input(INPUT_GET, "url", FILTER_DEFAULT);

    }
}
