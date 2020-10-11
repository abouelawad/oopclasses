<?php

require_once "../core/Request.php";
require_once "../core/Route.php";

// $_GET['name'] = "kareem";

// $req = new Request;
// echo( $req->get('age' , 25));

// echo $_SERVER['QUERY_STRING'];

$route = new Route;
$route->get("posts/index" , "postController@index");
$route->get("posts/create" , "postController@create");
$route->post("posts/store" , "postController@store");


echo"<pre>";
print_r($route->routes);

echo"</pre>";

