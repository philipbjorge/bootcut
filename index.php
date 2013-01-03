<?php
// Initialize Slim
require 'vendor/Slim/Slim.php';
\Slim\Slim::registerAutoloader();

// Initialize bootstrapped components
require_once('config.php');
$app = new \Slim\Slim(array('view' => new \Slim\Extras\Views\Twig()));

// Default Template Data
$app->view()->appendData(array('SITE_NAME' => $SITE_NAME, 'SITE_URL' => $SITE_URL));

// Routes
foreach (glob($CWD . "/routes/*.php") as $filename)
    require_once($filename);

// GO GO GO!
$app->run();

?>
