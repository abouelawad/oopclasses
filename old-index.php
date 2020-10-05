<?php

require_once "autoload.php";

use Core\Request;
use Core\Session;

// $_GET['name'] = "kareem";

// $req = new Request;
// echo( $req->get('name'));

$_SESSION['name'] = "kareem";

$session = new Session();
$session ->set('type', 'male');
//  $session->get("name");
 echo $session->flash("type");
 echo "<br>";
 var_dump($session->has('type'));