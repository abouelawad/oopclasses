<?php

require_once "autoload.php";

use Core\Request;
use Core\Session;
use Core\Db;
use Home\Request;




$session = new Session();
$session->set('name','ahmed');
$session->set('age', 25);
echo $session->get('name');

$home = new Request;
echo $home->get();


#old way to instanriate object 
// $db = new Db;

#SINGELTON
$db = Db::getInstance();

echo '<pre>';
print_r(
        $db->table("posts")
           ->select()
        //    ->where("id", "<=", "4")
        //    ->andWhere("title", "like", "%what%")
        //    ->orderBy("id", "desc")
           ->get()
                #OR
        //    ->getOne()
);
echo '</pre>' ;

