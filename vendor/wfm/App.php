<?php


namespace wfm;


class App
{
    public static $app;

    public function __construct()
    {
        $query = trim(urldecode($_SERVER['QUERY_STRING']), '/');
        new ErrorHandler();
        self::$app = Registry::getInstance();
        $this->getParams();
        Router::dispatch($query);
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