<?php
// Initialize Slim
require 'vendor/Slim/Slim.php';
\Slim\Slim::registerAutoloader();

// Initialize bootstrapped components
require_once('config.php');
$app = new \Slim\Slim(array('view' => new \Slim\Extras\Views\Twig()));

// Routes
foreach (glob($CWD . "/routes/*.php") as $filename)
    require_once($filename);

// GO GO GO!
$app->run();

?>
