<?php

Class Gestion_demandes extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $DB = new Database();
            
            $arr['etat'] = "attente";


            //querying the conge table
            $query_conge = "SELECT em.id_employee, em.nom, em.prenom,em.matricule,dc.id_conge,  dc.date_debut, dc.date_fin, dc.motif FROM demande_conge dc INNER JOIN employee em ON dc.id_employee = em.id_employee WHERE etat =:etat";
            $data['conge'] = $DB->read($query_conge, $arr);
            
            // show($data);
            // die();
            if(isset($_POST['submit_approuver_conge']))
            {
                // echo"t as approuver la demandede MRs ". $_POST['nom'] ."! Avec le motif ". $_POST['motif'] ."!!!";
                // die();
                $arr_approuver['etat'] = "approuve";
                $arr_approuver['id_employee'] = $_POST['id_employee'];
                $arr_approuver['id_conge'] = $_POST['id_conge'];
                $query_approuver = "UPDATE demande_conge SET etat=:etat WHERE id_employee =:id_employee AND id_conge = :id_conge";
                $data['approuver_conge'] = $DB->write($query_approuver, $arr_approuver);
                
            }else if(isset($_POST['submit_refuser_conge']))
            {
                $arr_refuser['etat'] = "refuse";
                $arr_refuser['id_employee'] = $_POST['id_employee'];
                $arr_refuser['id_conge'] = $_POST['id_conge'];

                $query_refuser = "UPDATE demande_conge SET etat=:etat WHERE id_employee =:id_employee AND id_conge = :id_conge";
                // echo"t as refuser la demande de MRs ". $_POST['nom'] ."! Avec le motif ". $_POST['motif'] ."!!!";
                // die();
                $data['refuser_conge'] = $DB->write($query_refuser, $arr_refuser);
                
            }


            //querying the absence table 
            $query_conge = "SELECT em.id_employee, em.nom, em.prenom,em.matricule,da.id_absence,  da.date_absence, da.heure_sortie, da.heure_retour, da.motif FROM demande_absence da INNER JOIN employee em ON da.id_employee = em.id_employee WHERE etat =:etat";
            $data['absence'] = $DB->read($query_conge, $arr);
            
            // show($data);
            // die();
            if(isset($_POST['submit_approuver_absence']))
            {
                // echo"t as approuver la demande d'absence de MRs ". $_POST['nom'] ."! Avec le motif ". $_POST['motif'] ."!!!";
                // die();
                $arr_approuver['etat'] = "approuve";
                $arr_approuver['id_employee'] = $_POST['id_employee'];
                $arr_approuver['id_absence'] = $_POST['id_absence'];
                $query_approuver = "UPDATE demande_absence SET etat=:etat WHERE id_employee =:id_employee AND id_absence = :id_absence";
                $data['approuver_absence'] = $DB->write($query_approuver, $arr_approuver);
                if($data['approuver_absence'])
                {
                    echo"t as approuver la demande d'absence de MRs ". $_POST['nom'] ."! Avec le motif ". $_POST['motif'] ."!!!";
                    die();
                }
            }else if(isset($_POST['submit_refuser_absence']))
            {
                
                $arr_refuser['etat'] = "refuse";
                $arr_refuser['id_employee'] = $_POST['id_employee'];
                $arr_refuser['id_absence'] = $_POST['id_absence'];

                $query_refuser = "UPDATE demande_absence SET etat=:etat WHERE id_employee =:id_employee AND id_absence = :id_absence";
                
                $data['refuser_absence'] = $DB->write($query_refuser, $arr_refuser);
                if($data['refuser_absence'])
                {
                    echo"t as refuser la demande d'absence de MRs ". $_POST['nom'] ."! Avec le motif ". $_POST['motif'] ."!!!";
                    die();
                }
                
                
            }




            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            // var_dump($data["absence"]);
            // die();
            $data['page_title'] = 'Gestion des demandes';
            $this->view("template/gestion_demandes", $data);
        }

       
}