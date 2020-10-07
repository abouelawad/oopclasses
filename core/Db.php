<?php 

namespace Core;

use mysqli;

//mySqli OOP
class Db
{
  public static $instance = null;
  private $conn;
  private $table;
  private $query;


  private function __construct()
  {
echo "new conncetion created";
    // Create connection
    // $conn = new mysqli($servername, $username, $password ,$dbname);
    $this->conn = new mysqli("localhost", "root", "" ,"oop_classes");

    // Check connection
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
    echo "Connected successfully";
  }

//   public function __construct()
//   {
// echo "new conncetion created";
//     // Create connection
//     // $conn = new mysqli($servername, $username, $password ,$dbname);
//     $this->conn = new mysqli("localhost", "root", "" ,"oop_classes");

//     // Check connection
//     if ($this->conn->connect_error) {
//       die("Connection failed: " . $this->conn->connect_error);
//     }
//     echo "Connected successfully";
//   }

  public static function getInstance()
  {
    if(! Db::$instance)
    {
      Db::$instance = new Db();
    }
    return Db::$instance;
  }


  public function table(string $table)
  {
    $this->table = $table;
    // $this->query = '';
    return $this;
  }


  public function select(string $fields="*")
  {
    $this->query = "SELECT $fields FROM $this->table";
    return $this;

  }

  public function where(string $field , string $operation , $value)
  {
    
    $this->query .= " WHERE $field $operation '$value' ";
    return $this;
  }
  public function andWhere(string $field , string $operation , $value)
  {
    
    $this->query .= "AND $field $operation '$value' ";
    return $this;
  }
  public function orWhere(string $field , string $operation , $value)
  {
    
    $this->query .= " OR $field $operation '$value' ";
    return $this;
  }

  public function orderBy(string $field , $order = 'ASC')
  {
    $this->query .= " ORDER BY $field $order";
    return $this;
  }
  public function limit(int $num )
  {
    $this->query .= " LIMIT $num";
    return $this;
  }


  public function get()
  {
    $result = $this->conn->query($this->query);

    if ($result->num_rows > 0) {
      // output data of each row
      return $result->fetch_all(MYSQLI_ASSOC);
    } else {
     return [];
    }
  }
  public function getOne()
  {
    $this->query .=" LIMIT 1";
    $result = $this->conn->query($this->query);

    if ($result->num_rows > 0) {
      // output data of each row
      return $result->fetch_assoc() ;
    } else {
     return [];
    }
  }

}