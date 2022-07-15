<?php
$this->view("template/header", $data);

?>

<div class="container h-100">
    <div class="row h-100  align-items-center">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header">
                    <h3>Visite Médicale : </h3>
                    <hr>
                </div>
                <div class="card-body">
                    Quand la date de votre visite médicale chez notre medecin interne approche, on va envoyer une notification avec plus de détails <br>
                    Cordialement!
                </div>
            </div>
        </div>
    </div>
</div>



<?php
$this->view("template/footer", $data);

?>

