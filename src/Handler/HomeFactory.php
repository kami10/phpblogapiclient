<?php

namespace App\Handler;

class HomeFactory
{
    public function __invoke()
    {
        $apiClient = new ApiClient();
        $template = new TemplateRenderer();
        $redisClient = new RedisClient();

        return new Home($apiClient, $template, $redisClient);
    }
}