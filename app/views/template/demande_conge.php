<?php

$this->view("template/header", $data);

?>






<div class="container w-100 mt-3 h-100">
    <div class="row   h-100 align-items-center">
        <form action="" method="post">
            <div class="form-group">
                <div class="card">
                    <div class="card-header text-primary font-weight-bold text-xl-leftmb-0">
                        Entrez les informations suivantes :
                        <hr>
                    </div>
                    <div class="card-body">
                  <?php  if(!isset($data['success'])){$data['success']=false;}
                    if($data['success']){ ?>
                        <div class="row justify-content-center">
                            <span class="badge bg-label-success w-100 me-1">Votre Demande a été enregistré en succés - Attendez la verification de l'un des RH! 
                            </span>
                        </div>


                        <?php }?>
                        <div class="row">
                            <div class="col-6 ">
                                <div class="mt-2">
                                    <label for="typeConge" class="form-label">Type de conge : </label>
                                    <select name="typeConge" id="typeConge" name="type" class="form-select">
                                        <option value="" selected> --- Choisissez un type de conge ---</option>
                                        <option value="conge 1">conge 1</option>
                                        <option value="conge 2">conge 2</option>
                                        <option value="conge 3">conge 3</option>
                                    </select>
                                </div>
                                <div class="mt-2">
                                    <label for="motif" class="form-label">Motif : </label>
                                    <input type="text" placeholder="Motif" name="motif" class="form-control">
                                </div>

                            </div>


                            <div class="col-6 mt-2">
                                <label for="html5-date-input" class="col-md-3 col-form-label">Date de debut :</label>
                                <input class="form-control" type="date" name="datedebut" id="html5-date-input" />

                                <label for="html5-date-input" class="col-md-3 col-form-label">Date de fin :</label>
                                <input class="form-control" type="date" name="datefin" id="html5-date-input" />
                                <input type="hidden" name="id_employee" value="<?php echo $_SESSION['user_id'] ?>">
                            </div>
                            <!-- <button class="btn btn-primary m-2" name="submit" type="submit">Valider</button> -->
                        </div>
                        <div class="row mt-5">
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary">Valider</button>
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