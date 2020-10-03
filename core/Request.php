
<?php 



class Request 
{
  public function get(string $key , $value = null)
  {
    # with trinary Operator
    // return $_GET[$key] = ($value) ? $value :  the $value is removed as a short cut for rinary Operator next line
    // return $_GET[$key] = ($value) ? $value : (isset($_GET[$key]) ? $_GET[$key] : $value);

    return $_GET[$key] = ($value) ?: (isset($_GET[$key]) ?: $value);

    #normal if condition
    //  if($value)
    //   {
    //     $_GET[$key] = $value;
    //   }else{
    //     if(isset($_GET[$key])){
    //       $value = $_GET[$key];
    //     } 
    //   }
    //   return $value;
  }
  public function post(string $key , $value = null)
  {
    return $_POST[$key] = ($value) ? $value : (isset($_POST[$key]) ? $_GET[$key] : $value);
    // short hand trinaty operation
    return $_POST[$key] = ($value) ?: (isset($_POST[$key]) ?: $value);
  }

  public function cookie(string $key, $value = null)
  {
    return $_COOKIE[$key] = ($value) ? $value : (isset($_COOKIE[$key]) ? $_GET[$key] : $value);
  }

  public function server(string $key)
  {
    return $_SERVER[$key];
  }
  public function serverAll()
  {
    // return $_SERVER;
    foreach ($_SERVER as $key => $value) {
      echo "<strong>$key : </strong> $value <br/>";
    }
  }
}