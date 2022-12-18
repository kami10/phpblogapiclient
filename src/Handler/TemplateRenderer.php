<?php

namespace App\Handler;

class TemplateRenderer
{
    public function render(string $filename, array $viewVariable=[])
    {
        include __DIR__ . '/../Templates/' . $filename;
    }
}