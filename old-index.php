<?php
#deprecated autoload
// require_once "autoload.php";
require_once "vendor/autoload.php";

use Core\Session;
use Core\Db;




$session = new Session();
$session->set('name', 'ahmed');
$session->set('age', 25);
echo $session->get('name');
echo '<br />';




#old way to instanriate object 
// $db = new Db;

#SINGELTON
$db = Db::getInstance();
$db2 = Db::getInstance();


echo '<pre>';
print_r(
        $db->table("posts")
           ->select('title , id')
           ->where("id", "<=", "2")
        //    ->andWhere("title", "like", "%what%")
        //    ->orderBy("id", "desc")
        //    ->get()
                #OR
           ->getOne()
);
echo '</pre>' ;

echo '<pre>';
print_r(
        $db2->table('posts')
                ->select("id , description")
                ->where('id', '=', 5)
                ->get()
);
echo '</pre>';
