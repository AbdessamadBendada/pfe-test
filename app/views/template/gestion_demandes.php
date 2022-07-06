<?php   $this->view("template/header", $data);   ?>

    <div class="container h-100 ">
        <div class="row mt-3">
            <div class="col">
            <div class="card">
                <h5 class="card-header text-primary bolder">Demandes des conges :</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table ">
                    <thead class="table-primary">
                      <tr>
                        <th>Nom et Prenom</th>
                        <th>Matricule</th>
                        <!-- <th>Users</th> -->
                        <th>Date de debut</th>
                        <th>Date de fin</th>
                        <th>Motif</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                            <?php 
                            if(isset($data[0])){
                            foreach($data as $item){ 
                                if(is_object($item)){
                                    // show( $item->nom ." " .$item->prenom );
                                    // continue;
                                ?>
                                <form action="" method="post">
                                    <tr>
                                        <td> <strong><?php echo $item->nom ." " .$item->prenom; ?></strong></td>
                                        <td><?php echo $item->matricule ?></td>
                                        <!-- <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar avatar-xs pull-up"
                                            title="Lilian Fuller"
                                            >
                                            <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                            </li>
                                            <li
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar avatar-xs pull-up"
                                            title="Sophia Wilkerson"
                                            >
                                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                            </li>
                                            <li
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar avatar-xs pull-up"
                                            title="Christina Parker"
                                            >
                                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                            </li>
                                        </ul>
                                        </td> -->
                                        <!-- chkyyl zouin bjhhd dial span -->
                                        <!-- <span class="badge bg-label-primary me-1">Active</span> -->

                                        <td><?php echo $item->date_debut ?></td>
                                        <td><?php echo $item->date_fin ?></td>
                                        <td><?php echo $item->motif ?></td>
                                        <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                ><button type="submit" name="submit_approuver" class="btn btn-sm btn-success w-75"><i class="bx bx-edit-alt me-1">Approuver</i></button></a
                                            >
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                ><button type="submit" name="submit_refuser" class="btn btn-sm btn-danger w-75"><i class="bx bx-edit-alt me-1">Refuser</i></button></a
                                            >
                                           
                                            </div>
                                        </div>
                                        </td>
                                        <input type="hidden" name="id_employee" value="<?=$item->id_employee?>">
                                        <input type="hidden" name="id_conge" value="<?=$item->id_conge?>">
                                        <input type="hidden" name="nom" value="<?=$item->nom?>">
                                        <input type="hidden" name="matricule" value="<?=$item->matricule?>">
                                        <input type="hidden" name="date_debut" value="<?=$item->date_debut?>">
                                        <input type="hidden" name="date_fin" value="<?=$item->date_fin?>">
                                        <input type="hidden" name="motif" value="<?=$item->motif?>">
                                    </tr>
                                    </form>
                         <?php 
                        }
                        } 
                    }else{

                        ?>
                        <div class="row">
                            
                             <span class="badge bg-label-danger w-100 me-1">Il n y a aucune demande de conge non examiner pour le moment</span>
                            
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


            <div class="row mt-3">
            <div class="col">
            <div class="card">
                <h5 class="card-header text-primary bolder">Demandes d'absence :</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table ">
                    <thead class="table-primary">
                      <tr>
                        <th>Nom et Prenom</th>
                        <th>Matricule</th>
                        <!-- <th>Users</th> -->
                        <th>Heure de debut</th>
                        <th>Heure de retour</th>
                        <th>Motif</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                            <?php 
                            if(isset($data[0])){
                            foreach($data as $item){ 
                                if(is_object($item)){
                                    // show( $item->nom ." " .$item->prenom );
                                    // continue;
                                ?>
                                <form action="" method="post">
                                    <tr>
                                        <td> <strong><?php echo $item->nom ." " .$item->prenom; ?></strong></td>
                                        <td><?php echo $item->matricule ?></td>
                                        <!-- <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar avatar-xs pull-up"
                                            title="Lilian Fuller"
                                            >
                                            <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                            </li>
                                            <li
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar avatar-xs pull-up"
                                            title="Sophia Wilkerson"
                                            >
                                            <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                            </li>
                                            <li
                                            data-bs-toggle="tooltip"
                                            data-popup="tooltip-custom"
                                            data-bs-placement="top"
                                            class="avatar avatar-xs pull-up"
                                            title="Christina Parker"
                                            >
                                            <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                            </li>
                                        </ul>
                                        </td> -->
                                        <!-- chkyyl zouin bjhhd dial span -->
                                        <!-- <span class="badge bg-label-primary me-1">Active</span> -->

                                        <td><?php echo $item->date_debut ?></td>
                                        <td><?php echo $item->date_fin ?></td>
                                        <td><?php echo $item->motif ?></td>
                                        <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                ><button type="submit" name="submit_approuver" class="btn btn-sm btn-success w-75"><i class="bx bx-edit-alt me-1">Approuver</i></button></a
                                            >
                                            <a class="dropdown-item" href="javascript:void(0);"
                                                ><button type="submit" name="submit_refuser" class="btn btn-sm btn-danger w-75"><i class="bx bx-edit-alt me-1">Refuser</i></button></a
                                            >
                                           
                                            </div>
                                        </div>
                                        </td>
                                        <input type="hidden" name="id_employee" value="<?=$item->id_employee?>">
                                        <input type="hidden" name="id_conge" value="<?=$item->id_conge?>">
                                        <input type="hidden" name="nom" value="<?=$item->nom?>">
                                        <input type="hidden" name="matricule" value="<?=$item->matricule?>">
                                        <input type="hidden" name="date_debut" value="<?=$item->date_debut?>">
                                        <input type="hidden" name="date_fin" value="<?=$item->date_fin?>">
                                        <input type="hidden" name="motif" value="<?=$item->motif?>">
                                    </tr>
                                    </form>
                         <?php 
                        }
                        } 
                    }else{

                        ?>
                        <div class="row">
                            
                             <span class="badge bg-label-danger w-100 me-1">Il n y a aucune demande d'absence  non examiner pour le moment</span>
                            
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



<?php   $this->view("template/footer", $data);      ?>

