<?php

namespace Core\Validation\Rules;

require_once "ValidationRule.php";


class Email implements ValidationRule
{
  private $name, $value;

  public function __construct($name, $value)
  {
    $this->name = $name;
    $this->value = $value;
  }

  public function validate()
  {
    if (! filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
      return "$this->name must be valid email";
    }
    return "";
  }
}
