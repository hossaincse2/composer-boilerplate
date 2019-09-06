<?php
// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use  App\Greetings;

echo Greetings::sayHelloWorld();