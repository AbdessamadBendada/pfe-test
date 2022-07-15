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
                    <?php  if(isset($data['reafectation']))  { ?>                   
    <?php  if($data['reafectation'])  { ?>
                    <div class="row justify-content-center">
                            <span class="badge bg-label-success w-100 me-1">Votre Demande a été enregistré en succés -
                                Attendez la verification de l'un des RH!
                            </span>
                        </div>
<?php }?>
<?php }?>
                        <div class="row  ">
                            <div class="col-6">

                                <label for="typeConge" class="form-label mt-2">Votre departement actuelle : </label>
                                <input type="text" name="departement" disabled
                                    value="<?=$data['emp'][0]->nom_departement?>" class="form-control">

                                <?php
                                        // $data['emp'][0]->nom 
                                        ?>


                            </div>
                            <div class="col-6">

                                <label for="typeConge" class="form-label mt-3">Le nouveau departement : </label>
                                <select name="nv_departement" id="select_departement" onchange="fetchService(this.value)" class="form-select form-control">
                                <option value="">--- Choisisser votre nouveau departement --- </option>
                                    <?php if(isset($data['departement'])){ 
                                        
                                        foreach($data['departement'] as $res){
                                            
                                        ?>
                                    

                                    <option value="<?= $res->id_departement?>"><?=$res->nom_departement?> </option>
                                    <?php }?>
                                    <?php  }?>
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