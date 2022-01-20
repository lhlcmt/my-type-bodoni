<?php

use \Illuminate\Database\Eloquent\Model;

class VarSvg extends Model {
  //
  public $timestamps = false;

  public static function validate($data){

    $errors = [];
    if(!isset($data['path'])){
      $errors['path'] = "Please fill in path";
    }
    if(empty($data['name'])){
      $errors['name'] = "Please fill in a name";
    }
    return $errors;

  }

}
