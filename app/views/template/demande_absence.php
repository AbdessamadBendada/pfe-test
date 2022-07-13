<?php

$this->view("template/header", $data);

?>





   
    <div class="container  w-100 mt-3 h-100" >
        <div class="row   h-100 align-items-center">
            <form action="" method="post">
                <div class="form-group">
                    	<div class="card">
                            <div class="card-header text-primary font-weight-bold text-xl-leftmb-0">
                                                Entrez les informations suivantes :
                                                    <hr>
                            </div>
                            <div class="card-body">                            
                                <div class="row">        
                                    <div class="col-6 ">                                    
                                                        <div class="mt-2">
                                                            <label for="typeConge" class="form-label">Heure de Sortie : </label>
                                                            <input type="time" required placeholder="" name="heure_sortie" class="form-control">
                                                        </div>
                                                        <div class="mt-2">
                                                            <label for="typeConge" class="form-label">Heure de Retour : </label>
                                                            <input type="time" required placeholder="" name="heure_retour" class="form-control">
                                                        </div>         
                                            
                                    </div>


                                    <div class="col-6 mt-2">
                                        <label for="html5-date-input" class="col-md-3 col-form-label">Date d'absence :</label>
                                        <input class="form-control" required type="date" name="date_absence"  id="html5-date-input" />

                                        <label for="html5-date-input" class="col-md-3 col-form-label">Motif :</label>
                                        <input class="form-control" required type="text" name="motif" placeholder="Motif" id="" />
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
