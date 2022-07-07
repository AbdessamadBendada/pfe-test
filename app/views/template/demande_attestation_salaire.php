<?php
$this->view("template/header", $data);

?>



<div class="container h-100">
    <div class="row h-50  align-items-center">
            <div class="col-12">
                <div class="card text-center">
                    <div class="card-header">
                        <h3>Attestation de Salaire : </h3>
                    </div>
                    <div class="card-body">
                        Appuiyer sur le boutton ci-dessus pour telecharger une version pdf de votre attestation de Salaire !
                        <br>
                        Cordiallement!

                        <div class="mt-5">
                            <form action="">
                                <button type="submit" class="btn btn-primary">Telecharger l'attestation de salaire</button>
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

