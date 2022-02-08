<?php
class Db
{
    public static function connect()
    {
        $db = new PDO("mysql:host=localhost;dbname=employé", "root", "");
        $db->exec("set names utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $db;
    }
}
