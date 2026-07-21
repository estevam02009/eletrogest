<?php

declare(strict_types=1);

namespace App\Core;

class Application
{
    public function run(): void 
    {
        echo "<h1>EletroGest</h1>";
        echo "<hr>";
        echo "<p>Framework iniciado.</p>";
        echo "<small>Versão 0.1.0</small>";
    }
}