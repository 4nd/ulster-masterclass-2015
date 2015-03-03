<?php
use Illuminate\Database\Schema\Blueprint;

require 'bootstrap.php';

$schema = Illuminate\Database\Capsule\Manager::schema();
$schema->dropIfExists('posts');
$schema->create('posts', function(Blueprint $table){
    $table->increments('id');
    $table->string('title', 150);
    $table->text('summary');
    $table->string('image');
    $table->timestamps();
});

$faker = \Faker\Factory::create();
for($i=0; $i<20; $i++) {
    $post = new \App\Model\Post();
    $post->title = $faker->sentence();
    $post->summary = $faker->paragraph();
    $post->image = $faker->imageUrl(500,300);
    $post->created_at = $faker->dateTimeBetween('last month','now');
    $post->save();
}
