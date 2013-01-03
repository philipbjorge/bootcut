<?php

$app->get('/:name', function ($name) use($app) {
    $app->render('index.twig', array('name' => $name));
});

$app->get('/', function () use($app) {
    $app->render('index.twig', array('name' => "World"));
});

?>
