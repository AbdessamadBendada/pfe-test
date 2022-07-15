<?php
$this->view("template/header", $data);
?>

<div class="container   h-100 mt-4">
    <div class="row   h-100 align-items-center">
        <div class="col-12 ">
            <?php if (!isset($_POST['submit_modifier'])) {  ?>
            <div class="card">
                <form action="" method="post">
                    <table class="table ">
                        <thead class="table-primary">
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Matricule</th>
                                <!-- <th>Users</th> -->

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php

                                if ($data["emp"]) {
                                    $i = 0;
                                    
                                    foreach ($data["emp"] as $item) {
                                        if (is_object($item)) {

                                            
                                          
                                ?>
                            <form action="" method="post">
                                <tr>
                                    <td> <strong><?php echo $item->nom  ?></strong></td>
                                    <td><strong><?php echo $item->prenom; ?></strong></td>
                                    <td><?php echo $item->matricule ?></td>

                                    <!-- chkyyl zouin bjhhd dial span -->
                                    <!-- <span class="badge bg-label-primary me-1">Active</span> -->

                                    <td>
                                        <div class="dropdown">
                                            <input type="hidden" name="id_employee" value="<?= $item->id_employee ?>">
                                            <input type="hidden" name="matricule" value="<?= $item->matricule ?>">
                                            <input type="hidden" name="nom" value="<?= $item->nom ?>">
                                            <input type="hidden" name="prenom" value="<?= $item->prenom ?>">
                                            <input type="hidden" name="date_naissance"
                                                value="<?= $item->date_naissance ?>">
                                            <input type="hidden" name="adresse" value="<?= $item->adresse ?>">
                                            <input type="hidden" name="situation_familiale"
                                                value="<?= $item->situation_familiale ?>">
                                            <input type="hidden" name="cin" value="<?= $item->cin ?>">
                                            <input type="hidden" name="email" value="<?= $item->email ?>">
                                            <input type="hidden" name="id_departement"
                                                value="<?= $item->id_departement ?>">
                                            <input type="hidden" name="image" value="<?= $item->image ?>">
                                            <input type="hidden" name="sexe" value="<?= $item->sexe ?>">
                                            <input type="hidden" name="role" value="<?= $item->role ?>">
                                            <input type="hidden" name="metier" value="<?= $item->metier ?>">
                                            <input type="hidden" name="tel" value="<?= $item->tel ?>">
                                            <input type="hidden" name="index" value="<?= $i ?>">
                                            <button type="submit" name="submit_modifier"
                                                class="btn btn-sm btn-primary">Modifier info paie</button>
                                        </div>
                                    </td>


                                </tr>
                            </form>
                            <?php
                            $i++;
                                        }
                                    }
                                } else {

                                    ?>
                            <div class="row">

                                <span class="badge bg-label-danger w-100 me-1">Il n y a aucun employee dans la base de
                                    donnees</span>

                            </div>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </form>
            </div>

        </div>

    </div>
</div>



<?php } else {
    $index = $_POST['index'];
                if (!$data['exists']) { 
                    
                         ?>

<div class="container   h-100 mt-4">
    <div class="row   h-100 align-items-center">
    <div class="col-12 ">
        <form action="" method="post">
            <div class="form-group">
                <div class="card">
                    <div class="card-header text-primary font-weight-bold text-xl-leftmb-0">
                    L'employé(e) <?=$data['emp'][$index]->nom ." " .$data['emp'][$index]->prenom ?> n'a pas encore ses information de paie remplis!
                        <hr>
                        <?php  ?>
                       
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="salaire_brute" class="form-label">Le salaire de base : </label>
                                <input type="text" name="salaire_brute_ajouter"  class="form-control">

                            </div>
                            <div class="col-6">
                                <label for="rib" class="form-label">Le RIB : </label>
                                <input type="text" name="rib_ajouter"  class="form-control">

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <input type="hidden" name="id_employee" value="<?= $data['emp'][$index]->id_employee?>">
                                 <button class="btn btn-primary" type="submit" name="submit_ajouter">Valider</button>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </form>
        </div>
    </div>
</div>





<?php
         }else{
          

                    ?>

<div class="container  h-100  mt-4">
    <div class="row h-100  align-items-center">
        <form action="" method="post">
            <div class="form-group">
                <div class="card">
                    <div class="card-header text-primary font-weight-bold text-xl-leftmb-0">

                        Voici les informations de paie de 
                    L'employé(e) <?=$data['emp'][$index]->nom ." " .$data['emp'][$index]->prenom ?> 
                        <hr>
                        <?php    ?>
                       
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="salaire_brute" class="form-label">Le salaire de base : </label>
                                <input type="text" name="salaire_brute_modifier" required value="<?=$data['exists'][0]->salaire_base?>"  class="form-control">

                            </div>
                            <div class="col-6">
                                <label for="rib" class="form-label">Le RIB : </label>
                                <input type="text" name="rib_modifier"  required value="<?=$data['exists'][0]->rib?>"  class="form-control">

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                            <input type="hidden" name="id_employee" value="<?= $data['emp'][$index]->id_employee?>">
                                 <button class="btn btn-primary" type="submit" name="submit_update">Modifier</button>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>





<?php
                }

?>






<?php } ?>

<?php
$this->view("template/footer", $data);
?>