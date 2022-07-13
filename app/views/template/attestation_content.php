<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Attestation de travail & salaire</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'
        integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
        <style>
            body{
                height:100vh;
                width: 100%;
                font-size: large;
                line-height: 40px;
            }
            ul {
                line-height: 70px;
            }
        </style>
</head>

<body>
   <div class='container border h-100 w-100 p-5'>
    
        <div class='row justify-content-center  p-5 w-100 border'>
            <div class="col">
            <p class='h2'>
                <strong>ATTESTATION DE TRAVAIL ET DE SALAIRE</strong>
            </p>
            </div>
            <hr>    
        </div>
        <div class='row p-5'>
            <div class='row w-100'>
                <p>
                Nous soussignés, <strong>'NOM_DU_SOCIETE'</strong> dont le siège est situé à <strong>'L'adresse du siege de la societe' </strong>, attestons que :
                </p>
            </div>
            <div class='row w-100 pt-2 pl-2 pr-2 pb-2'>
                <ul>
                   
                    <li>Nom & Prenom : <?= $data['info'][0]->nom . "  ". $data['info'][0]->prenom ?></li>
                    <li>C.I.N        : <?= $data['info'][0]->cin ?>  </li>
                    <li>C.N.S.S      : <?= $data['info'][0]->cnss ?>  </li>
                </ul>
            </div>
            <div class='row'>
            est employé (e) titulaire à notre societe depuis <strong>    '<?= $data['info'][0]->date_debut ?>' </strong>.
            </div>

            <div class='row'>
                '<?='le nom' ?>' exerce actuellement la fonction <?='le metier'?>  au siege de notre societe et percoit des emolument de <strong> <?=$data['info'][0]->salaire_base ?> </strong> MAD brut. 
            </div>

            <div class='row mt-4'>
                Cette attestation lui est délivrée, à sa demande, pour servir et valoir ce que de droit. 
            </div>
        </div>
   </div>










    <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'
        integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'>
    </script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'
        integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'>
    </script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js'
        integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'>
    </script>
</body>

</html>