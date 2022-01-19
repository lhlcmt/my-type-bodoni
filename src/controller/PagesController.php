<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../model/MainText.php';


class PagesController extends Controller {

  public function index() {
    $main_texts = MainText::where('title', '!=', 'NULL')->get();
    $this->set('main_texts',$main_texts);

  }
}
