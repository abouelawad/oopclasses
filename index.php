<?php

require_once "vendor/autoload.php";
use Core\Validation\Validator;

$req = [
        [
          "name" => "name",
          "value" => "" ,
          "rules" => "required|str"
        ],

        [
          "name" => "age",
          "value" => "sgg",
          "rules" => "required|numeric"
        ],

        [
          "name" => "email",
          "value" => "a@a.com",
          "rules" => "required|email"
        ]

  ];

  // $validator =new Validator();
  // $errors = $validator->make($req);

$errors = Validator::make($req);  


 
  echo '<pre>';
    print_r($errors);
  echo '</pre>' ;
  


  
