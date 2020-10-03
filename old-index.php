<?php  

require_once "core/Request.php";

$_GET['name'] = "kareem";

$req = new Request;
echo( $req->get('kareem',25));

// echo $_SERVER['QUERY_STRING'];