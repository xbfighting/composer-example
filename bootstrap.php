<?php 
require __DIR__ . '/vendor/autoload.php';

use Recca0120\LaravelTracy\Tracy;
use Dotdenv\Dotdenv;
use Dotenv\Dotenv;

Tracy::instance();
$dotenv = new Dotenv(__DIR__);
$dotenv->load();

?>