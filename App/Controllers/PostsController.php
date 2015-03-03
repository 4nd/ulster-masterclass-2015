<?php
namespace App\Controllers;

use App\Model\Post;

class PostsController extends BaseController {

    public function index()
    {
        $posts = Post::latest()->get();
        $this->view->set('posts',$posts);
        $this->app->render('posts.twig');
    }

}