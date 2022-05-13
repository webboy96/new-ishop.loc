<?php


namespace wfm;


class App
{
    public static $app;

    public function __construct()
    {
        self::$app = Registry::getInstance();
        $this->getParams();
    }

    protected function getParams()
    {
        $params = CONFIG . '/params.php';
        if (file_exists($params)) {
            $params = require_once $params;
            if (!empty($params)) {
                foreach ($params as $k => $v) {
                    self::$app->setProperty($k, $v);
                }
            }
        } else echo "Ошибка файл $params не найден";

    }
}