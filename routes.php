<?php
$app->get('/', function () {
    echo 'Homepage';
});
$app->get('/hello/:name', '\App\Controllers\HelloController:hello');

$app->get('/posts', '\App\Controllers\PostsController:index');