<?php

namespace Core;

class ConfigController
{
    private string $url;
    private array $urlSet;
    private string $urlController;
    private string $urlMethod;

    public function __construct()
    {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->urlSet = explode("/", $this->url);

            if ((isset($this->urlSet[0])) and (isset($this->urlSet[1]))) {
                $this->urlController = $this->urlSet[0];
                $this->urlMethod = $this->urlSet[1];
            } else {
                $this->urlController = "error";
                $this->urlMethod = "index";
            }
        } else {
            $this->urlController = "home";
            $this->urlMethod = "index";
        }
        echo "Controller: {$this->urlController} - Método: {$this->urlMethod}";
    }
}
