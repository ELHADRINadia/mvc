<?php

class Employe
{

    public static function getAll()
    {
        $stmt = DB::connect()->prepare("SELECT * FROM employes");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }
    public static function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO employes (nom, matricule, departement, poste, date_embauche, statut) VALUES()');
    }
}
