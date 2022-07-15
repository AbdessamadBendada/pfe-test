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
                        <?php if(!isset($data['success'])){$data['success']=false;}?>
                        <?php if($data['success']){?>
                            <div class="row justify-content-center ">
                                <div class="col-8 ">
                                <span class="badge w-100 bg-label-success w-100 me-1">Le Département a été ajouté en succés
                                </span>
                                </div>
                            </div>
<?php } ?>

                      
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <label for="typeConge" class="form-label">Entrez le nom du département : </label>
                                <input type="text"  name="nom_departement" value="" class="form-control">
                            </div>
                            <div class="col-6">
                                
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-8   mt-3">
                                <input type="hidden" name="id_employee" value="<?= ""?>">
                                <input type="submit" name="submit_insert" value="Valider" class="btn btn-primary">

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