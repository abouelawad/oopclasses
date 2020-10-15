<?php

namespace Core\Validation\Rules;

require_once "ValidationRule.php";

class Required implements ValidationRule
{
  private $name, $value;

  public function __construct($name, $value)
  {
    $this->name = $name;
    $this->value = $value;
  }

  public function validate()
  {
    if(strlen($this->name === 0))
    {
      return "$this->name is required";
    }
      return "";
  }
}
