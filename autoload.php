<?php 

spl_autoload_register("getClassFile");

function getClassFile($classFullName)
{
  $temp = explode('\\', $classFullName);
 $className = end($temp);

  require_once "core/$className.php";
  require_once "home/$className.php";
}