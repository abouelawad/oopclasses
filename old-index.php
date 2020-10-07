<?php

require_once "autoload.php";

use Core\Request;
use Core\Session;
use Core\Db;

#old way to instanriate object 
// $db = new Db;

#SINGELTON
$db = Db::getInstance();




echo '<pre>';
print_r(
        $db->table("posts")
           ->select()
          //  ->where("id", "<=", "4")
          //  ->andWhere("title", "like", "%what%")
          //  ->orderBy("id", "desc")
           
           ->getOne()
);
echo '</pre>' ;

