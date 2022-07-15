<?php $this->view("template/header", $data);


?>
<div class="container h-100 ">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <h5 class="card-header text-primary bolder">Demandes de changement de nomination :</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table ">
                        <thead class="table-primary">
                            <tr>
                                <th>Nom et Prenom</th>
                                <th>Matricule</th>
                                <!-- <th>Users</th> -->
                                <th>Ancien Metier</th>
                                <th>Nouveau Metier</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php
                            if ($data['nomination']) {
                                foreach ($data['nomination'] as $item) {

                                    if (is_object($item)) {
                                        // show( $item->nom ." " .$item->prenom );
                                        // continue;
                            ?>
                                        <form action="" method="post">
                                            <tr>
                                                <td> <strong><?php echo $item->nom . " " . $item->prenom; ?></strong></td>
                                                <td><?php echo $item->matricule ?></td>


                                                <!-- chkyyl zouin bjhhd dial span -->
                                                <!-- <span class="badge bg-label-primary me-1">Active</span> -->

                                                <td><?php echo $item->ancien_metier ?></td>
                                                <td><?php echo $item->nouveau_metier ?></td>

                                                <td>
                                                    <div class="dropdown" style="position: absolute;z-index: 10;">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><button type="submit" name="submit_approuver_nomination" class="btn btn-sm btn-success w-75"><i class="bx bx-edit-alt me-1">Approuver</i></button></a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><button type="submit" name="submit_refuser_nomination" class="btn btn-sm btn-danger w-75"><i class="bx bx-edit-alt me-1">Refuser</i></button></a>

                                                        </div>
                                                    </div>
                                                </td>
                                                <input type="hidden" name="id_employee" value="<?= $item->id_employee ?>">
                                                <input type="hidden" name="nv_metier" value="<?= $item->nouveau_metier ?>">
                                                <input type="hidden" name="nom" value="<?= $item->nom ?>">
                                                <input type="hidden" name="matricule" value="<?= $item->matricule ?>">
                                                <input type="hidden" name="ancien_metier" value="<?= $item->ancien_metier ?>">
                                                <input type="hidden" name="id_nv_metier" value="<?= $item->id_nv_metier ?>">
                                                <input type="hidden" name="id_demande_nomination" value="<?= $item->id_changement_nomination ?>">


                                            </tr>
                                        </form>
                                <?php
                                    }
                                }
                            } else {

                                ?>
                                <div class="row">

                                    <span class="badge bg-label-danger w-100 me-1">Il n y a aucune demande de changement de nomination non examiner pour le moment</span>

                                </div>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>



</div>



<?php $this->view("template/footer", $data);      ?>