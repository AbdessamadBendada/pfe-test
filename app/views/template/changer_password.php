<?php
$this->view("template/header", $data);

?>

<div class="container h-100 mt-4">
    <div class="row h-100 align-items-center">
        <form action="" method="post">
            <div class="form-group">
                <div class="card">
                    <div class="card-header text-primary font-weight-bold text-xl-leftmb-0">
                        Changer votre mot de pass:
                        <hr>
                    </div>
                    
                    <div class="card-body">
                    <?php
                    if(!isset($data['changer'])){$data['changer']=false;}
                    if($data['changer']){ ?>
                        <div class="row justify-content-center">
                            <span class="badge bg-label-success w-100 me-1">Votre mot de pass a été modifié en succé!
                            </span>
                        </div>
                        <?php }?>


                        <div class="row mb-5 mr-5 ml-5 justify-content-center">
                            <div class="col-6">
                                <label class="form-label" for="password">Ancien Mot de pass :</label>


                                <div class="input-group input-group-merge form-password-toggle">
                                    <input type="password" id="password" class="form-control" name="old_password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                <?php 
                                 if(isset($_POST['submit_modifier'])){
                                if (!$data['password_correct']) {

                                    ?>

                                <span class="badge bg-label-danger w-100 me-1">Le mot de pass que vous avez entré est
                                    incorrecte</span>

                                <?php



                                    }
                                    
                                }?>
                            </div>





                        </div>

                        <hr>

                        <div class="row m-5 justify-content-center">
                            <div class="col-6">
                                <label class="form-label" for="password">Nouveau Mot de pass :</label>


                                <div class="input-group input-group-merge form-password-toggle">
                                    <input type="password" id="password" class="form-control" name="new_password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>

                            </div>
                            <div class="col-6">
                                <label class="form-label" for="password">Confirmation Mot de pass :</label>


                                <div class="input-group input-group-merge form-password-toggle">
                                    <input type="password" id="password" class="form-control" name="confirm_password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>



                            <?php
                          
                          if(isset($_POST['submit_modifier'])){
                          if (!$data['password_match']) {

                                    ?>

                            <div class="row justify-content-center">
                                <span class="badge bg-label-danger w-100 me-1">Les mot de pass que vous avez entré ne
                                    sont pas identique
                                </span>
                            </div>
                            <?php }
                            }

?>

                            <div class="row  justify-content-center mt-5 ">

                                <input type="hidden" name="id_employee" value="<?= $_SESSION['user_id'] ?>">
                                <input type="submit" name="submit_modifier" value="Valider"
                                    class="btn btn-primary  w-25 float-left ">


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