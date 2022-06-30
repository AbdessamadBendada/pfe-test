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
                                            <label for="motif" class="form-label">Nom : </label>
                                            <input type="text" placeholder="" name="nom" class="form-control" required>
                                            <label for="motif" class="form-label mt-3">Date de naissance : </label>
                                            <input type="date" required placeholder="" name="date_naissance" class="form-control">
                                            <label for="motif" class="form-label mt-3">Cin : </label>
                                            <input type="text" placeholder="" name="cin" class="form-control" required>
                                            <!-- <label for="motif" class="form-label">Adresse : </label>
                                            <input type="text" placeholder="" name="nom" class="form-control"> -->
                                            <label for="motif" class="form-label mt-3">Matricule : </label>
                                            <input type="text" placeholder="" name="matricule" required class="form-control">
                                            <label for="motif" class="form-label mt-3">Metier : </label>
                                            <input type="text" placeholder="" name="metier"  required class="form-control">
                                        </div>
                                        <div class="col-6 ">
                                            <label for="motif" class="form-label">Prenom : </label>
                                            <input type="text" placeholder="" name="prenom" required class="form-control">
                                            <label for="motif" class="form-label mt-3">Situation Familliale : </label>
                                            <input type="text" placeholder="" required name="situation_familliale" class="form-control">
                                            <label for="motif" class="form-label mt-3">Email : </label>
                                            <input type="text" placeholder="" required name="email" class="form-control">
                                            <label for="motif" class="form-label mt-3">Departement : </label>
                                            <!-- <input type="text" placeholder="" name="departement" required class="form-control"> -->
                                            <select name="departement" id="" class="form-select">
                                                <option value="1">hello</option>
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
                                        <div class="col-3">
                                                <button type="submit" class="btn btn-primary">Ajouter</button>
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