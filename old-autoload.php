<?php 

#OLD AUTOLOADER
/*spl_autoload_register("getClassFile");

function getClassFile($classFullName)
{
  $temp = explode('\\', $classFullName);
 $className = end($temp);

  require_once "core/$className.php";
  
} */

spl_autoload_register("getClassFile");

Function getClassFile($className)
{
$filePath = lcfirst( str_replace("\\" , DIRECTORY_SEPARATOR , $className)) . ".php";

if(file_exists($filePath))
require_once($filePath);

}
