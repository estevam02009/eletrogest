<?php

declare(strict_types=1);

// Carrega o autoload do Composer.
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Application;

$app = new Application();
$app->run();