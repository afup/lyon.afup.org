<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

echo (new \Afup\Antenne\Generator())->render($argv[1] ?? 'index');
