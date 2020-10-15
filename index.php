<?php

require_once "vendor/autoload.php";
use Core\Validation\Validator;

$req = [
        [
          "name" => "name",
          "value" => "ds" ,
          "rules" => "required|str"
        ],

        [
          "name" => "age",
          "value" => 25,
          "rules" => "required|numeric"
        ],

        [
          "name" => "email",
          "value" => "a@a",
          "rules" => "required|email"
        ]

  ];

  $errors = Validator::make($req);

  echo '<pre>';
  print_r($errors);
  echo '</pre>' ;

