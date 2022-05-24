<?php

namespace app\controllers;


use RedBeanPHP\R;
use wfm\Controller;
use app\models\Main;

/** @property Main $model */

class MainController extends Controller
{


    public function indexAction()
    {
            $names = $this->model->get_names();
            $name = R::getRow('SELECT * FROM name WHERE id = 2');
            $this->setMeta('Главная страница', 'Описание..', 'Ключевые слова..');
            $this->set(compact('names', 'name'));
    }
}