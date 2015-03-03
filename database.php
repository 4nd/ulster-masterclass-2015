<?php
use Illuminate\Database\Capsule\Manager;

// Database information
$mysql = [
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'ulster',
    'username' => 'demo',
    'password' => 'demo',
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix' => ''
];

$capsule = new Manager;
$capsule->addConnection($mysql);
$capsule->setFetchMode(PDO::FETCH_OBJ);
$capsule->setAsGlobal();
$capsule->bootEloquent();
