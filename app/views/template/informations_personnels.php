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
                                    <div style="height:150px;" class="row  align-items-center justify-content-center">
                                        <div class="col-1  h-75">
                                            <img class="h-100 w-px-100  h-auto rounded-circle border border-primary border-3 p-0" src="<?=$data[0]->image;?>" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="row ">
                                                <div class="col-6 ">
                                                    <label for="motif" class="form-label mt-1">Nom : </label>
                                                    <input type="text"  placeholder="" name="nom" class="form-control" disabled value="<?=$data[0]->nom;?>">
                                                </div>
                                                <div class="col-6">
                                                    <label for="motif" class="form-label mt-1">Prenom : </label>
                                                    <input type="text" placeholder="" name="prenom" disabled value="<?=$data[0]->prenom;?>" class="form-control">
                                                </div>
                                            </div>
                                           
                                            <label for="motif" class="form-label mt-3">Date de naissance : </label>
                                            <input type="text" required placeholder="" disabled value="<?=$data[0]->date_naissance;?>" name="date_naissance" class="form-control">
                                            <label for="motif" class="form-label mt-3">Cin : </label>
                                            <input type="text" placeholder="" name="cin" disabled value="<?=$data[0]->cin;?>" class="form-control" required>
                                            <!-- <label for="motif" class="form-label">Adresse : </label>
                                            <input type="text" placeholder="" name="nom" class="form-control"> -->
                                            <label for="motif" class="form-label mt-3">Matricule : </label>
                                            <input type="text" placeholder="" name="matricule"  disabled value="<?=$data[0]->matricule;?>" class="form-control">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="motif" class="form-label mt-3">Metier : </label>
                                                    <select disabled name="metier" id="" class="form-select">
                                                        <option value="-"   >--- Choisissez un Metier ---</option>
                                                                <?php
                                                                $i = 0;
                                                                    foreach($data['id_metier'] as $res)
                                                                    {
                                                                ?>
                                                                    <option <?php if($res == $data[0]->metier) { echo "selected" ;} ?> value=<?=$res?>><?php
                                                                
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
                                                    <select disabled name="role" id="" class="form-select">
                                                                <option disabled value="-" selected  >--- Choisissez un Role ---</option>
                                                            <?php
                                                            $i = 0;
                                                                foreach($data['id_role'] as $res)
                                                                {
                                                            ?>
                                                                <option <?php if($res == $data[0]->role) { echo "selected" ;} ?>  value=<?=$res?>><?php
                                                            
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
                                            <select name="sexe" disabled id="" class="form-select">
                                                <option value="" selected>--- Choisissez votre sexe ---</option>
                                                <option <?php if($data[0]->sexe == "homme") {echo 'selected';} ?> value="homme">Homme</option>
                                                <option <?php if($data[0]->sexe == "femme") {echo 'selected';}?> value="femme">Femme</option>
                                            </select>
                                            <label for="situation_familiale" class="form-label mt-3">Situation Familliale : </label>
                                            <select disabled name="situation_familiale" id="" class="form-select">
                                                <option value="">--- Choisissez la situation familiale ---</option>
                                                <option <?php if($data[0]->situation_familiale == "celibataire") {echo 'selected';}?> value="celibataire">Celibataire</option>
                                                <option <?php if($data[0]->situation_familiale == "marie") {echo 'selected';}?> value="marie">Marie</option>
                                                <option <?php if($data[0]->situation_familiale == "divorce") {echo 'selected';}?> value="divorce">Divorce</option>
                                                <option <?php if($data[0]->situation_familiale == "veuf") {echo 'selected';}?> value="veuf">Veuf</option>
                                            </select>
                                            <label for="motif" class="form-label mt-3">Email : </label>
                                            <input disabled type="text" value="<?=$data[0]->email;?>" placeholder="" required name="email" class="form-control">
                                            <label for="motif" class="form-label mt-3">Departement : </label>
                                            <!-- <input type="text" placeholder="" name="departement" required class="form-control"> -->
                                           
                                            <select disabled name="departement" id="" class="form-select">
                                                <option value="-" selected  >--- Choisissez un departement ---</option>
                                                    <?php
                                                     $i = 0;
                                                        foreach($data['id_departement'] as $res)
                                                        {
                                                    ?>
                                                        <option <?php if($res == $data[0]->role) { echo "selected" ;} ?> value=<?=$res?>><?php
                                                       
                                                         echo $data['nom_departement'][$i];
                                                         $i++;
                                                         ?></option>
                                                    <?php
                                                            }
                                                    ?>
                                            </select>
                                            <label for="motif" class="form-label mt-3">Telephone : </label>
                                            <input disabled type="text" value="<?=$data[0]->tel;?>" placeholder=""  name="tel" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="motif" class="form-label mt-3">Adresse : </label>
                                            <textarea class="form-control" disabled name="adresse" id="exampleFormControlTextarea1" required rows="3"><?=$data[0]->adresse;?></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="row"> -->
                                        <!-- <div class="col">
                                            <label for="image" class="form-label mt-3">Image : </label>
                                            <input class="form-control" name="image" required type="file" id="formFile" />
                                        </div> -->
                                       
                                    <!-- </div> -->
                                    <!-- <div class="row mt-3">
                                        <div class="col-3">
                                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                        </div>
                                    </div> -->
                                          
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