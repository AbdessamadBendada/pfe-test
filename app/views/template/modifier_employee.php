<?php
$this->view("template/header", $data);
?>

<div class="container h-100 mt-4">
    <div class="row ">
        <div class="col-12 ">
            <?php  if(!isset($_POST['submit_modifier'])){  ?>
                    <div class="card">
                        <form action="" method="post"  >
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
                            
                            if($data["emp"]){
                                $i = 0;
                                foreach($data["emp"] as $item){ 
                                    if(is_object($item)){
                                        
                                        $i++;
                                    ?>
                                <form action="" method="post"  >
                                    <tr>
                                        <td> <strong><?php echo $item->nom  ?></strong></td>
                                        <td><strong><?php echo$item->prenom;?></strong></td>
                                        <td><?php echo $item->matricule ?></td>
                                        
                                        <!-- chkyyl zouin bjhhd dial span -->
                                        <!-- <span class="badge bg-label-primary me-1">Active</span> -->
                                       
                                        <td>
                                            <div class="dropdown">
                                                        <input type="hidden" name="id_employee" value="<?=$item->id_employee?>">
                                                        <input type="hidden" name="matricule" value="<?=$item->matricule?>">
                                                        <input type="hidden" name="nom" value="<?=$item->nom?>">
                                                        <input type="hidden" name="prenom" value="<?=$item->prenom?>">
                                                        <input type="hidden" name="date_naissance" value="<?=$item->date_naissance?>">
                                                        <input type="hidden" name="adresse" value="<?=$item->adresse?>">
                                                        <input type="hidden" name="situation_familiale" value="<?=$item->situation_familiale?>">
                                                        <input type="hidden" name="cin" value="<?=$item->cin?>">
                                                        <input type="hidden" name="email" value="<?=$item->email?>">
                                                        <input type="hidden" name="id_departement" value="<?=$item->id_departement?>">
                                                        <input type="hidden" name="image" value="<?=$item->image?>">
                                                        <input type="hidden" name="sexe" value="<?=$item->sexe?>">
                                                        <input type="hidden" name="role" value="<?=$item->role?>">
                                                        <input type="hidden" name="metier" value="<?=$item->metier?>">
                                                        <input type="hidden" name="tel" value="<?=$item->tel?>">
                                                <button type="submit" name="submit_modifier" class="btn btn-sm btn-primary">Modifier</button>
                                            </div>
                                        </td>
                                        
                                        
                                        </tr>
                                </form>
                         <?php 
                        }
                        } 
                    }else{

                        ?>
                        <div class="row">
                            
                             <span class="badge bg-label-danger w-100 me-1">Il n y a aucun employee dans la base de donnees</span>
                            
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





                        <?php } else{ ?>

                <div class="row">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header text-primary font-weight-bold text-xl-left" style="">
                            
                            
                                <hr>
                        </div>
                        <div class="card-body ">
                            <div class="form-group">
                                <form action="" method="POST" >
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="row ">
                                                <div class="col-6 ">
                                                    <label for="motif" class="form-label mt-1">Nom : </label>
                                                    <input type="text" placeholder="" name="nom" value="<?=$_POST['nom']?>" class="form-control" required>
                                                </div>
                                                <div class="col-6">
                                                    <label for="motif" class="form-label mt-1">Prenom : </label>
                                                    <input type="text" placeholder="" name="prenom" value="<?=$_POST['prenom']?>"  required class="form-control">
                                                </div>
                                            </div>
                                           
                                            <label for="motif" class="form-label mt-3">Date de naissance : </label>
                                           
                                            <input type="date" required placeholder="" value="<?=date('Y-m-d',strtotime($_POST['date_naissance']))?>"  name="date_naissance" class="form-control">
                                            <label for="motif" class="form-label mt-3">Cin : </label>
                                            <input type="text" placeholder="" name="cin" value="<?=$_POST['cin']?>"  class="form-control" required>
                                            <!-- <label for="motif" class="form-label">Adresse : </label>
                                            <input type="text" placeholder="" name="nom" class="form-control"> -->
                                            <label for="motif" class="form-label mt-3">Matricule : </label>
                                            <input type="text" placeholder="" name="matricule" value="<?=$_POST['matricule']?>" required class="form-control">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="motif" class="form-label mt-3">Metier : </label>
                                                    <select name="metier" id=""  class="form-select">
                                                        
                                                                <?php
                                                                $i = 0;
                                                                    foreach($data['id_metier'] as $res)
                                                                    {
                                                                ?>
                                                                    <option <?php if($res == $_POST['metier']){echo "selected";}?> value=<?=$res?>><?php
                                                                
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
                                                                
                                                            <?php
                                                            $i = 0;
                                                                foreach($data['id_role'] as $res)
                                                                {
                                                            ?>
                                                                <option  <?php if($res == $_POST['role']){echo "selected";}?>  value=<?=$res?>><?php
                                                            
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
                                                <option <?php if($_POST['sexe'] == "homme"){echo "selected";}?>  value="homme">Homme</option>
                                                <option <?php if($_POST['sexe'] == "femme"){echo "selected";}?> value="femme">Femme</option>
                                            </select>
                                            <label for="situation_familiale" class="form-label mt-3">Situation Familliale : </label>
                                            <select name="situation_familiale" id="" class="form-select">
                                                <option value="">--- Choisissez la situation familiale ---</option>
                                                <option <?php if($_POST['situation_familiale'] == "celibataire"){echo "selected";}?>  value="celibataire">bayer</option>
                                                <option <?php if($_POST['situation_familiale'] == "marie"){echo "selected";}?> value="marie">Marie</option>
                                                <option <?php if($_POST['situation_familiale'] == "divorce"){echo "selected";}?> value="divorce">Divorce</option>
                                                <option <?php if($_POST['situation_familiale'] == "veuf"){echo "selected";}?> value="veuf">Veuf</option>
                                            </select>
                                            <label for="motif" class="form-label mt-3">Email : </label>
                                            <input type="text" placeholder="" required name="email" value="<?=$_POST['email']?>" class="form-control">
                                            <label for="motif" class="form-label mt-3">Departement : </label>
                                            <!-- <input type="text" placeholder="" name="departement" required class="form-control"> -->
                                           
                                            <select name="id_departement" id="" class="form-select">
                                                <option value="-" selected  >--- Choisissez un departement ---</option>
                                                    <?php
                                                     $i = 0;
                                                        foreach($data['id_departement'] as $res)
                                                        {
                                                    ?>
                                                        <option <?php if($res == $_POST['id_departement']){echo "selected";}?> value=<?=$res?>><?php
                                                       
                                                         echo $data['nom_departement'][$i];
                                                         $i++;
                                                         ?></option>
                                                    <?php
                                                            }
                                                    ?>
                                            </select>
                                            <label for="motif" class="form-label mt-3">Telephone : </label>
                                            <input type="text" placeholder="" name="tel" value="<?=$_POST['tel']?>"  required class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="motif" class="form-label mt-3">Adresse : </label>
                                            <textarea class="form-control" name="adresse" id="exampleFormControlTextarea1" required rows="3"> <?=$_POST['adresse']?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-3">
                                        <div class="col-1 mr-4">
                                            <input type="hidden" name="id_employee" value="<?=$_POST['id_employee']?>">
                                                <button type="submit" name="submit_update" class="btn btn-primary">Modifier</button>
                                               
                                        </div>
                                        <div class="col-3">
                                                <button type="reset" class="btn btn-danger">Annuler</button>
                                        </div>
                                    </div>
                                          
                                </form>
                            </div>
                                
                        </div>
                    </div>
                    <?php } ?>
        </div>
        </div>
    </div>
</div>





<?php
$this->view("template/footer", $data);
?>