<?php

namespace App\Controllers;

use App\Models\Post;
use Core\Db;
use Core\View;

class PostController
{
  public function index()
  {
    // echo 'hello from PostController index';
    $data['posts'] = Post::connectTable()->select()->get();


    return View::load('posts/index', $data);
  }
  public function create()
  {
    echo 'hello from PostController create';
  }
  public function show($id)
  {
    echo "hello from PostController Show with $id";
  }
}
