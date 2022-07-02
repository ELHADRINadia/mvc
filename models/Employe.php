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
    static public function getEmploye($data){
        $id =$data['id'];
        try{
            $query = 'SELECT *FROM employes WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id"=>$id));
            $employe = $stmt->fetch(PDO::FETCH_OBJ);          
            return $employe;
        } catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
    }
    public static function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO employes (nom, matricule, departement, poste, date_embauche, statut) VALUES(:nom, :matricule, :departement, :poste, :date_embauche, :statut)');
        $stmt->bindParam(':nom', $data['nom']);
        $stmt->bindParam(':matricule', $data['matricule']);
        $stmt->bindParam(':departement', $data['departement']);
        $stmt->bindParam(':poste', $data['poste']);
        $stmt->bindParam(':date_embauche', $data['date_embauche']);
        $stmt->bindParam(':statut', $data['statut']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt->null();

    }
}
