<?php

// Constants
$SITE_NAME = "SITE NAME";
$SITE_URL = "http://0.0.0.0/";
$CWD = realpath(dirname(__FILE__));

// DB Settings
require_once('vendor/Redbean/rb.php');
R::setup("sqlite:$CWD/db.txt", 'user', 'password');

// Twig Template Settings
\Slim\Extras\Views\Twig::$twigDirectory = realpath($CWD . '/vendor/Twig');
\Slim\Extras\Views\Twig::$twigTemplateDirs = array(realpath($CWD . '/templates'));
\Slim\Extras\Views\Twig::$twigOptions = array('debug' => true);
\Slim\Extras\Views\Twig::$twigExtensions = array('Twig_Extensions_Slim');

?>
