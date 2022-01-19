<?php

use \Illuminate\Database\Eloquent\Model;

class MainText extends Model {
  //
  public $timestamps = false;

  public static function validate($data){

    $errors = [];
    if(!isset($data['title'])){
      $errors['title'] = "Please fill in title";
    }
    if(empty($data['text'])){
      $errors['text'] = "Please fill in a text";
    }
    return $errors;

  }

}
