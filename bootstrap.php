<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/database.php';

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig(),
    'templates.path' => __DIR__ . '/views'
));
$app->view()->parserOptions = array(
    'debug' => true,
    'cache' => __DIR__ . '/tmp/compiled'
);
$app->view()->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);
