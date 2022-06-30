<?php
$this->view("template/header", $data);

?>



<div class="container h-100 mt-4">
    <div class="row ">
        <div class="col-12 ">
                    <div class="card">
                        <div class="card-header text-primary font-weight-bold text-xl-left" style="">
                            Mes informations :
                                <hr>
                        </div>
                        <div class="card-body ">
                            <div class="form-group">
                                <form action="" class=" ">
                                    <div class="row">
                                        <div class="col-6 ">
                                            <label for="motif" class="form-label">Nom : </label>
                                            <input type="text" placeholder="" name="nom" class="form-control">
                                            <label for="motif" class="form-label">Date de naissance : </label>
                                            <input type="text" placeholder="" name="date_naissance" class="form-control">
                                            <label for="motif" class="form-label">Cin : </label>
                                            <input type="text" placeholder="" name="cin" class="form-control">
                                            <!-- <label for="motif" class="form-label">Adresse : </label>
                                            <input type="text" placeholder="" name="nom" class="form-control"> -->
                                            <label for="motif" class="form-label">Matricule : </label>
                                            <input type="text" placeholder="" name="matricule" class="form-control">
                                            <label for="motif" class="form-label">Metier : </label>
                                            <input type="text" placeholder="" name="metier" class="form-control">
                                        </div>
                                        <div class="col-6 ">
                                            <label for="motif" class="form-label">Prenom : </label>
                                            <input type="text" placeholder="" name="prenom" class="form-control">
                                            <label for="motif" class="form-label">Situation Familliale : </label>
                                            <input type="text" placeholder="" name="situation_familliale" class="form-control">
                                            <label for="motif" class="form-label">Email : </label>
                                            <input type="text" placeholder="" name="email" class="form-control">
                                            <label for="motif" class="form-label">Departement : </label>
                                            <input type="text" placeholder="" name="nom" class="form-control">
                                            <label for="motif" class="form-label">Telephone : </label>
                                            <input type="text" placeholder="" name="tel" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="motif" class="form-label">Adresse : </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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

