<?php


namespace wfm;


use RedBeanPHP\R;

class Db
{

    use TSingelton;

    private function __construct()
    {
        $db = require_once CONFIG . '/config_db.php';
        R::setup($db['dsn'], $db['user'], $db['password']);
        if (!R::testConnection())
            {
                throw new \Exception('Нет соединени с базой данных' ,500);
            }
        R::freeze(true);
        if (DEBUG)
            {
                R::debug(true, 3);
            }
    }

}