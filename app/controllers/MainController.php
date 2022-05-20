<?php

namespace app\controllers;

use wfm\Controller;

class MainController extends Controller
{


    public function indexAction()
    {
         $this->setMeta('Главная страница', 'Описание..', 'Ключевые слова..');
         $this->set(['test' => 'TEST VAR']);
    }
}