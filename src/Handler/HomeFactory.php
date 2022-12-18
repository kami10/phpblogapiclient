<?php

namespace App\Handler;

class HomeFactory
{
    public function __invoke()
    {
        $apiClient = new ApiClient();
        $template = new TemplateRenderer();

        return new Home($apiClient, $template);
    }
}