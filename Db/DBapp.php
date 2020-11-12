<?php


class DBapp
{
protected static $dbinstance;

private function __construct()
{
    self::$dbinstance =  new PDO('mysql:host=127.0.0.1;dbname=editor', 'root', 'root');

}

public static function Get()
{

    if(self::$dbinstance != null) {
        return self::$dbinstance;
    }
    else {
        $db = new DBapp();
        return $db::$dbinstance;
    }
}
}