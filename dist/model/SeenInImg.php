<?php

use \Illuminate\Database\Eloquent\Model;

class SeenInImg extends Model {
  //
  public $timestamps = false;

  public static function validate($data){

    $errors = [];
    if(!isset($data['path'])){
      $errors['path'] = "Please fill in path";
    }
    return $errors;

  }

}
