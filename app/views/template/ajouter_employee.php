<?php
$this->view("template/header", $data);
?>


<div class="container h-100 mt-4">
    <div class="row ">
        <div class="col-12 ">
                    <div class="card">
                        <div class="card-header text-primary font-weight-bold text-xl-left" style="">
                            ENtrer les informations du nouveau employee :
                                <hr>
                        </div>
                        <div class="card-body ">
                            <div class="form-group">
                                <form action="" method="POST" enctype="multipart/form-data" class="">
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="row ">
                                                <div class="col-6 ">
                                                    <label for="motif" class="form-label mt-1">Nom : </label>
                                                    <input type="text" placeholder="" name="nom" class="form-control" required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="motif" class="form-label mt-1">Prenom : </label>
                                                    <input type="text" placeholder="" name="prenom" required class="form-control">
                                                </div>
                                            </div>
                                           
                                            <label for="motif" class="form-label mt-3">Date de naissance : </label>
                                            <input type="date" required placeholder="" name="date_naissance" class="form-control">
                                            <label for="motif" class="form-label mt-3">Cin : </label>
                                            <input type="text" placeholder="" name="cin" class="form-control" required>
                                            <!-- <label for="motif" class="form-label">Adresse : </label>
                                            <input type="text" placeholder="" name="nom" class="form-control"> -->
                                            <label for="motif" class="form-label mt-3">Matricule : </label>
                                            <input type="text" placeholder="" name="matricule" required class="form-control">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="motif" class="form-label mt-3">Metier : </label>
                                                    <select name="metier" id="" class="form-select">
                                                        <option value="-" selected  >--- Choisissez un Metier ---</option>
                                                                <?php
                                                                $i = 0;
                                                                    foreach($data['id_metier'] as $res)
                                                                    {
                                                                ?>
                                                                    <option value=<?=$res?>><?php
                                                                
                                                                    echo $data['nom_metier'][$i];
                                                                    $i++;
                                                                    ?></option>
                                                                <?php
                                                                        }
                                                                ?>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <label for="motif" class="form-label mt-3">Role : </label>
                                                    <select name="role" id="" class="form-select">
                                                                <option value="-" selected  >--- Choisissez un Role ---</option>
                                                            <?php
                                                            $i = 0;
                                                                foreach($data['id_role'] as $res)
                                                                {
                                                            ?>
                                                                <option value=<?=$res?>><?php
                                                            
                                                                echo $data['nom_role'][$i];
                                                                $i++;
                                                                ?></option>
                                                            <?php
                                                                    }
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-6 ">
                                            <label for="sexe" class="form-label">Sexe : </label>
                                            <select name="sexe" id="" class="form-select">
                                                <option value="" selected>--- Choisissez votre sexe ---</option>
                                                <option value="homme">Homme</option>
                                                <option value="femme">Femme</option>
                                            </select>
                                            <label for="situation_familiale" class="form-label mt-3">Situation Familliale : </label>
                                            <select name="situation_familiale" id="" class="form-select">
                                                <option value="">--- Choisissez la situation familiale ---</option>
                                                <option value="celibataire">bayer</option>
                                                <option value="marie">Marie</option>
                                                <option value="divorce">Divorce</option>
                                                <option value="veuf">Veuf</option>
                                            </select>
                                            <label for="motif" class="form-label mt-3">Email : </label>
                                            <input type="text" placeholder="" required name="email" class="form-control">
                                            <label for="motif" class="form-label mt-3">Departement : </label>
                                            <!-- <input type="text" placeholder="" name="departement" required class="form-control"> -->
                                           
                                            <select name="departement" id="" class="form-select">
                                                <option value="-" selected  >--- Choisissez un departement ---</option>
                                                    <?php
                                                     $i = 0;
                                                        foreach($data['id_departement'] as $res)
                                                        {
                                                    ?>
                                                        <option value=<?=$res?>><?php
                                                       
                                                         echo $data['nom_departement'][$i];
                                                         $i++;
                                                         ?></option>
                                                    <?php
                                                            }
                                                    ?>
                                            </select>
                                            <label for="motif" class="form-label mt-3">Telephone : </label>
                                            <input type="text" placeholder="" name="tel" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="motif" class="form-label mt-3">Adresse : </label>
                                            <textarea class="form-control" name="adresse" id="exampleFormControlTextarea1" required rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="image" class="form-label mt-3">Image : </label>
                                            <input class="form-control" name="image" required type="file" id="formFile" />
                                        </div>
                                       
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-1 mr-4">
                                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                        </div>
                                        <div class="col-3">
                                                <button type="reset" class="btn btn-danger">Annuler</button>
                                        </div>
                                    </div>
                                          
                                </form>
                            </div>
                                
                        </div>
                    </div>
        </div>
    </div>
</div>





<?php
$this->view("template/footer", $data);
?>