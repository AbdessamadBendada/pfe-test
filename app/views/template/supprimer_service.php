<?php
$this->view("template/header", $data);
?>

<div class="container h-100 mt-4">
    <div class="row ">
        <div class="col-12 ">

            <div class="card">
            <?php if(!isset($data['success'])){$data['success']=false;}?>
                        <?php if($data['success']){?>
                            <div class="row justify-content-center ">
                                <div class="col-12 ">
                                <span class="badge w-100 bg-label-success w-100 me-1">Le Département a été ajouté en succés
                                </span>
                                </div>
                            </div>
<?php } ?>
                <form action="" method="post">
                    <table class="table ">
                        <thead class="table-primary">
                            <tr>
                                <th>Nom Du Département</th>
                                
                                <!-- <th>Users</th> -->

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php 
                            
                            if($data['departement']){
                                $i = 0;
                                foreach($data['departement'] as $item){ 
                                    if(is_object($item)){
                                        
                                        $i++;
                                    ?>
                                <form action="" method="post">
                                <tr>
                                    <td> <strong><?php echo $item->nom_departement  ?></strong></td>
                                    

                                    <!-- chkyyl zouin bjhhd dial span -->
                                    <!-- <span class="badge bg-label-primary me-1">Active</span> -->

                                    <td>
                                        <div class="dropdown">
                                            <input type="hidden" name="id_departement" value="<?=$item->id_departement?>">
                                            <input type="hidden" name="matricule" value="<?=$item->matricule?>">
                                            <button type="submit" name="submit_supprimer"
                                                class="btn btn-sm btn-danger">Supprimer <i class='bx bx-trash'></i></button>

                                           
                                         
                     

                                        </div>
                                    </td>


                                </tr>
                            </form>
                            <?php 
                        }
                        } 
                    }else{

                        ?>
                            <div class="row">

                                <span class="badge bg-label-danger w-100 me-1">Il n y a aucun employee dans la base de
                                    donnees</span>

                            </div>
                            <?php
                    }
                        ?>
                        </tbody>
                    </table>

                </form>
            </div>

        </div>

    </div>
</div>













<?php
$this->view("template/footer", $data);
?>