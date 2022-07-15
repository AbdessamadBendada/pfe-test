<?php
$this->view("template/header", $data);

?>


<div class="container h-100">


    <div class="row justify-content-center">

        <div class="col-8">
            <button type="button" class="btn btn-primary float-right mt-4" title="Ajouter une publication" data-toggle="modal" data-target="#exampleModal"><strong>Ajouter Une Note</strong>
                <i class='fa fa-plus'></i>
            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">

                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Nouvelle Note:</label>
                                    <textarea class="form-control" row="50" name="nv_note" id="message-text"></textarea>
                                </div>
                                <div class="modal-footer float-right">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <input type="submit" class="btn btn-primary" name="submit_publier" value="publier">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>



        </div>


    </div>


    <?php
    $x = 0;
    if ($data['success']) {
        foreach ($data['success'] as $note) { ?>

            <div id="notes" class="row ml-5 mr-5 ">
                <div class="col h-100 ml-5 mr-5 mt-1">
                    <div class="row justify-content-center">
                        <div class="card h-auto p-5 m-3">
                            <div class="row " style=" height:50px;">

                                <div class="col-5 ">
                                    <div class="row">
                                        <span class="align-middle text-primary"> <strong>NOTE : <small> - <?= $note->date ?> - </small></strong>

                                        </span>
                                    </div>
                                    <div class="row">

                                        <hr class="w-50 mt-1">
                                    </div>


                                </div>
                            </div>
                            <div class="row text-justify m-2 " style=" height:auto;">
                                <?= $note->publication ?>
                            </div>

                            <div class="row ">

                                <div class="col-2 float-right">
                                    <form action="" method="post">
                                        <input type="hidden" name="id_publication" value="<?= $note->id_publication ?>">
                                        <button type="submit" name="submit_supprimer" class="btn btn-danger btn-sm w-100 m-2">Supprimer</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php

                // echo $_POST['publication']; 
                ?>

            </div>
        <?php
            $x++;
        }
    } else {
        ?>

        <div class="row h-100 border"></div>

    <?php } ?>

</div>




<?php
$this->view("template/footer", $data);

?>