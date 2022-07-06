<?php

Class Conge 
{
    function conge($POST, $nbr_jours)
    {
        $DB = new Database();
        $_SESSION['error'] = "";

        if(isset($_POST['datedebut']) || isset($_POST['datefin']) || isset($_POST['motif']) || isset($_POST['type']) )
        {
            $arr['id_employee'] = $POST['id_employee'];
            $arr['type'] = $POST['type'];
            $arr['datedebut']= $POST['datedebut'];
            $arr['datefin'] = $POST['datefin'];
            $arr['jours_restant'] = 30 - $nbr_jpurs; // had 30 khassha twelli katji mn la base de donnees bash twelli dynamique 
            $arr['motif'] =  $POST['motif'];
            
            
            
            if($arr['jours_restant'] <= 0)
            {
                echo "Vous avez epuisez votre nombre de jours de conge";
            } 
            $query = "INSERT INTO demande_conge (id_employee, type_conge, date_debut, date_fin, jours_restants, motif) VALUES (:id_employee, :type_conge, :date_debut, :date_fin, :jours_restants,:motif)";

            $data = $DB->write($query, $arr);

            // if($data)
        }

    }
}