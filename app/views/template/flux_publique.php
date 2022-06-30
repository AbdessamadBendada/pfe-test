<?php
$this->view("template/header", $data);

?>

<h1>This is the "Flux Publique" page</h1>
<div class="container">
    
    
    <div class="row justify-content-center" style="border:solid;">

        <div class="col-8" style="border:solid;">
                            <button type="button" class="btn btn-primary float-right" title="Ajouter une publication" data-toggle="modal" data-target="#exampleModal" >
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
                                    <form action="<?=ROOT?>flux_publique" method="post">
                                    
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Publication:</label>
                                        <textarea class="form-control" row="35" name="publication" id="message-text"></textarea>
                                    </div>
                                    <div class="modal-footer float-right">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                    <input type="submit" class="btn btn-primary" value="publier">
                                </div>
                                    </form>
                                </div>
                                
                                </div>
                            </div>
                            </div>



        </div>


    </div>

<?php 
$x = 0 ;
while($x < 10) { ?>

    <div id="publications"   class="row ml-5 mr-5 ">
        <div class="col h-100 ml-5 mr-5 mt-1">
            <div class="row justify-content-center">
                <div class="card h-auto p-5 m-3">
                    <div class="row " style=" height:50px;">
                        <div class="col-1" >
                                                    <img src="<?=ASSETS?>assets/img/avatars/1.png" alt="" style="height:50px; width:50px;" class="  rounded-circle">

                        </div>
                        <div class="col-5 " >  
                        <div class="row">
                            <span class="align-middle"> <b>Abdessamad bendada</b> </span>
                        </div>
                        <div class="row">
                            <small>Admin</small>
                            <hr class="w-50 mt-1">
                        </div>
                          
                        </div>
                    </div>
                    <div class="row text-justify m-2 " style=" height:auto;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos a deserunt reprehenderit minima aliquid consequatur pariatur impedit dolor eos tenetur. Rem dignissimos, vero consequuntur exercitationem error neque? Laboriosam, officia temporibus.   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus dicta iure ea! Deserunt asperiores exercitationem fugiat provident a repellendus ducimus, voluptatem magni accusamus vitae ex quam atque molestias voluptas? Cum, dicta, maiores blanditiis, nemo assumenda dolore repellat doloribus magnam sequi inventore saepe perferendis! Dolorem error ut beatae consequatur quos, possimus fugiat nihil quisquam porro laudantium inventore magnam repellendus rem officiis tempora eius alias commodi culpa repudiandae architecto nostrum repellat quidem itaque? Eum ut doloremque ex eos a? Id ipsa nesciunt eum quis iste facere ad excepturi culpa accusamus voluptates consectetur quidem ut voluptatibus veritatis pariatur doloribus, odit aliquid possimus obcaecati?Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore incidunt rem iure amet cupiditate neque impedit aut consequatur delectus explicabo consectetur sequi quisquam, porro necessitatibus voluptate dolor cumque saepe eaque.
                    </div>

                    <div class="row  ">
                        <div class="col-2" >
                            <button type="submit" class="btn btn-success w-100 m-2">Modifier</button>
                        </div>
                        <div class="col-2" >
                            <button type="submit" class="btn btn-danger w-100 m-2">Supprimer</button>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <?php 
        
       // echo $_POST['publication']; ?> 

    </div>
<?php 
$x++;

}

?>

 
</div>




<?php
$this->view("template/footer", $data);

?>

