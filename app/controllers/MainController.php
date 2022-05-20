<?php

namespace app\controllers;


use wfm\Controller;
use app\models\Main;

/** @property Main $model */

class MainController extends Controller
{


    public function indexAction()
    {
            $names = $this->model->get_names();

            $this->setMeta('Главная страница', 'Описание..', 'Ключевые слова..');
            $this->set(compact('names'));
    }
}