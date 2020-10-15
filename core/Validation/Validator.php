<?php 
namespace Core\Validation;

use Core\Validation\ValidationStrategy;
use Core\Validation\Rules\Email;
use Core\Validation\Rules\Str ;
use Core\Validation\Rules\Required ;
use Core\Validation\Rules\Numeric;

class Validator 
{
  public static function make(array $request)
  {
    $errors = [];
    foreach($request as $input)
    {
      $name = $input['name'];
      $value = $input['value'];
      $rules = explode("|" , $input['rules']);
      foreach($rules as $rule)
      {
        
        if($rule == "required")
        {
          $validation_rule = new Required($name , $value);
          $strategy = new ValidationStrategy($validation_rule);
          $error = $strategy->validate();
        }elseif($rule == "email"){
          $validation_rule = new Email($name, $value);
          $strategy = new ValidationStrategy($validation_rule);
          $error = $strategy->validate();
        }
        elseif($rule == "numeric"){
          $validation_rule = new Numeric($name, $value);
          $strategy = new ValidationStrategy($validation_rule);
          $error = $strategy->validate();
        }
        elseif($rule == "str"){
          $validation_rule = new Str($name, $value);
          $strategy = new ValidationStrategy($validation_rule);
          $error = $strategy->validate();
        }

        if(! empty($error))
        {
          $errors[] = $error;
        }
      }
    }
    return $errors;
  }
}