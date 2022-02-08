<?php
$data = new EmployersControllers();
$employes = $data->getAllEmployes();

?>
<div class="wrapper">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Ajouter un employé</div>
                <div class="card-body bg-light">
                <a href="<?php echo BASE_URL; ?>" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-home"></i>
                    </a>
                <form method="post">
                    <div class="form-group ">
                        <label for="nom">Nom*</label>
                        <input type="text" name="nom" class="form-control" placeholder="Nom">
                    </div>
                    
                    <div class="form-group ">
                        <label for="prenom">Prenom*</label>
                        <input type="text" name="prenom" class="form-control" placeholder="prenom ">
                    </div>
                    
                    <div class="form-group ">
                        <label for="matricule">Matricule*</label>
                        <input type="text" name="matricule" class="form-control" placeholder="Matricule">
                    </div>
                    
                    <div class="form-group ">
                        <label for="departement">Departement*</label>
                        <input type="text" name="departement" class="form-control" placeholder="departement">
                    </div>
                    
                    <div class="form-group ">
                        <label for="poste">Poste*</label>
                        <input type="text" name="poste" class="form-control" placeholder="poste">
                    </div>
                    
                    <div class="form-group ">
                        <label for="date_embauche">Date embauche*</label>
                        <input type="date" name="date_embauche" class="form-control">
                    </div>
                    <div class="form-group ">
                    <label for="action">Action*</label>
                        <select class="form-control" name="statut">
                            <option value="1">Active</option>
                            <option value="0">Résilié</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <button type="submit" class=" btn btn-primary" name="submit">Valider</button>
                    </div>
                </form>




                </div>
            </div> 
        </div>
    </div>
</div>                   