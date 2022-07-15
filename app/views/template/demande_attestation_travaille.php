<?php
$this->view("template/header", $data);
// use Dompdf\Dompdf;
// require_once ASSETS.'assets/dompdf/autoload.inc.php';
// $dompdf = new Dompdf();
?>




<div class="container h-100">
    <div class="row h-100  align-items-center">
            <div class="col-12 justify-content-center">
                <div class="card  text-center">
                    <div class="card-header">
                        <h3>Attestation de travail : </h3>
                    </div>
                    <div class="card-body">
                    
                        Appuyer sur le boutton ci-dessus pour télécharger une version pdf de votre attestation de travail !
                       

                        <div class="mt-5">
                            
                                <a href="<?=ROOT?>attestation">

                                            <button  class="btn btn-primary">Télécharger l'attestation de travail</button>
                                </a>
                          
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>



<?php


$this->view("template/footer", $data);

?>


