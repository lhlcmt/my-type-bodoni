<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../model/MainText.php';
require_once __DIR__ . '/../model/VarSvg.php';
require_once __DIR__ . '/../model/SeenInImg.php';
require_once __DIR__ . '/../model/BodoniRule.php';

class PagesController extends Controller {

  public function index() {
    $main_texts = MainText::where('title', '!=', 'NULL')->get();
    $this->set('main_texts',$main_texts);

    $var_svgs = VarSvg::where('path', '!=', 'NULL')->get();
    $this->set('var_svgs',$var_svgs);

    $seen_in_imgs = SeenInImg::where('path', '!=', 'NULL')->get();
    $this->set('seen_in_imgs',$seen_in_imgs);

    $bodoni_rules = BodoniRule::where('title', '!=', 'NULL')->get();
    $this->set('bodoni_rules',$bodoni_rules);

  }
}
