<?php
$this->view("template/header", $data);

?>

<div class="container h-100 mt-4">
        <div class="row h-100 align-items-center">
            <form action="" method="post">
                    <div class="form-group">
                        <div class="card">
                            <div class="card-header text-primary font-weight-bold text-xl-leftmb-0">
                                    Remplir les information suivantes !
                                    <hr>
                            </div>
                            <div class="card-body">
                                <div class="row  ">
                                    <div class="col-6">
                                        
                                            <label for="typeConge" class="form-label mt-3">Votre departement actuelle : </label>
                                            <input type="text" name="departement" disabled value="<?=$data['emp'][0]->nom_departement?>" class="form-control">
                                       
                                        <?php
                                        // $data['emp'][0]->nom 
                                        ?>
                                       
                                            <label for="typeConge" class="form-label mt-3">Votre service actuelle : </label>
                                            <input type="text" name="service" disabled value="<?=$data['emp'][0]->nom_service?>"  class="form-control">
                                       
                                       
                                            <label for="typeConge" class="form-label mt-3">Votre cellule actuelle : </label>
                                            <input type="text" name="cellule" disabled value="<?=$data['emp'][0]->nom_entite?>"  class="form-control">
                                        
                                    </div>
                                    <div class="col-6">
                                               
                                                <label for="typeConge" class="form-label mt-3">Le nouveau departement : </label>
                                                <select name="nv_departement" class="form-select form-control">
                                                        <option value="">--- Choisisser votre nouveau departement --- </option>
                                                        <option value="1">departement 1 </option>
                                                        <option value="2">departement 2 </option>
                                                        <option value="3">departement 3 </option>

                                                </select>
                                            

                                               
                                                <label for="typeConge" class="form-label mt-3">Le nouveau service : </label>
                                                <select name="nv_service" class="form-select form-control">
                                                    <option selected value="">--- Choisisser votre nouveau service --- </option>
                                                    <option value="1">service 1 </option>
                                                    <option value="2">service 2 </option>
                                                    <option value="3">service 3 </option>

                                                </select>
                                           

                                              
                                                <label for="typeConge" class="form-label mt-3">La nouvelle cellule : </label>
                                                <select name="nv_cellule" class="form-select form-control">
                                                    <option selected value="">--- Choisisser votre nouveau service --- </option>
                                                    <option value="1">cellule 1 </option>
                                                    <option value="2">cellule 2 </option>
                                                    <option value="3">cellule 3 </option>

                                                </select>
                                            
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12  mt-3">
                                        <input type="hidden" name="id_employee" value="<?=$_SESSION['user_id']?>">
                                        <input type="submit" name="sumbit_nomination" value="Valider" class="btn btn-primary">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>




<?php
$this->view("template/footer", $data);

?>

