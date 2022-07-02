<?php

class EmployersControllers
{
    public function getAllEmployes()
    {

        $employes = Employe::getAll();
        return $employes;
    }
    public function getOneEmploye()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
        }
        $employe = Employe::getOneEmploye($data);
        return $employe;
    }
    public function addEmploye()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'nom' => $_POST['nom'],
                'matricule' => $_POST['matricule'],
                'departement' => $_POST['departement'],
                'poste' => $_POST['poste'],
                'date_embauche' => $_POST['date_embauche'],
                'statut' => $_POST['statut'],
            );
            $result = Employe::add($data);
            if ($result === 'ok') {
                header('location:' . BASE_URL);

            } else {
                echo $result;
            }
        }
    }
}
