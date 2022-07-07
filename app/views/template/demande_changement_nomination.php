<?php
$this->view("template/header", $data);

?>

    <div class="container h-100 mt-4">
        <div class="row">
            <form action="" method="post">
                    <div class="form-group">
                        <div class="card">
                            <div class="card-header text-primary font-weight-bold text-xl-leftmb-0">
                                    Remplir les information suivantes !
                                    <hr>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                    <label for="typeConge" class="form-label">Votre nomination actuelle : </label>
                                        <input type="text" name="nomination" value="<?=$data['emp'][0]->nom?>" class="form-control">
                                    </div>
                                    <div class="col-6">
                                    <label for="typeConge" class="form-label">La nouvelle nomination : </label>
                                        <select name="nv_nomination" class="form-select">

                                                <option value="1">metier 1 </option>
                                                <option value="2">metier 2 </option>
                                                <option value="3">metier 3 </option>

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

