<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../model/MainText.php';
require_once __DIR__ . '/../model/VarSvg.php';


class PagesController extends Controller {

  public function index() {
    $main_texts = MainText::where('title', '!=', 'NULL')->get();
    $this->set('main_texts',$main_texts);

    $var_svgs = VarSvg::where('path', '!=', 'NULL')->get();
    $this->set('var_svgs',$var_svgs);

  }
}
