<?php

Class Gestion_demandes extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $DB = new Database();
            
            $arr['etat'] = "attente";
            $query_conge = "SELECT em.id_employee, em.nom, em.prenom,em.matricule,dc.id_conge,  dc.date_debut, dc.date_fin, dc.motif FROM demande_conge dc INNER JOIN employee em ON dc.id_employee = em.id_employee WHERE etat =:etat";
            $data = $DB->read($query_conge, $arr);
            
            // show($data);
            // die();
            if(isset($_POST['submit_approuver']))
            {
                // echo"t as approuver la demandede MRs ". $_POST['nom'] ."! Avec le motif ". $_POST['motif'] ."!!!";
                // die();
                $arr_approuver['etat'] = "approuve";
                $arr_approuver['id_employee'] = $_POST['id_employee'];
                $arr_approuver['id_conge'] = $_POST['id_conge'];
                $query_approuver = "UPDATE demande_conge SET etat=:etat WHERE id_employee =:id_employee AND id_conge = :id_conge";
                $data = $DB->write($query_approuver, $arr_approuver);
                
            }else if(isset($_POST['submit_refuser']))
            {
                $arr_refuser['etat'] = "refuse";
                $arr_refuser['id_employee'] = $_POST['id_employee'];
                $arr_refuser['id_conge'] = $_POST['id_conge'];

                $query_refuser = "UPDATE demande_conge SET etat=:etat WHERE id_employee =:id_employee AND id_conge = :id_conge";
                // echo"t as refuser la demande de MRs ". $_POST['nom'] ."! Avec le motif ". $_POST['motif'] ."!!!";
                // die();
                $data = $DB->write($query_refuser, $arr_refuser);
                
            }
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            $data['page_title'] = 'Gestion des demandes';
            $this->view("template/gestion_demandes", $data);
        }

       
}