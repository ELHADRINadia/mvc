<?php
class Employe
{
    public static function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM employé');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;

    }

}
