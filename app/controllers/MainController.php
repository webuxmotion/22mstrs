<?php

namespace app\controllers;

use core\Tone;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           Tone::$app->getProperty('site_name'),
           '22mstrs - місце людей та проектів, які змінюють правила гри',
           '22mstrs, люди, проекти'
       );
    }
}