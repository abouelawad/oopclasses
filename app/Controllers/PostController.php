<?php 

namespace App\Controllers;

class PostController 
{
public function index()
{
  echo 'hello from PostController index';
}
public function create()
{
  echo 'hello from PostController create';
}
public function store($id)
{
  echo "hello from PostController store with $id";
}




}