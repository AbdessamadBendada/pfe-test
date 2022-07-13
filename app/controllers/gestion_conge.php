<?php

Class Gestion_conge extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $DB = new Database();
            if ($_SESSION['role'] == 1) {
                header("Location:" . ROOT . "home");
            } else {
                if (!isset($_SESSION['user_id'])) {
                    header("Location:" . ROOT . "login");
                } else {
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
                $query_approuver_conge = "UPDATE demande_conge SET etat=:etat WHERE id_employee =:id_employee AND id_conge = :id_conge";
                $data['approuver_conge'] = $DB->write($query_approuver_conge, $arr_approuver);
                $query_conge = "SELECT em.id_employee, em.nom, em.prenom,em.matricule,dc.id_conge,  dc.date_debut, dc.date_fin, dc.motif FROM demande_conge dc INNER JOIN employee em ON dc.id_employee = em.id_employee WHERE etat =:etat";
                $data['conge'] = $DB->read($query_conge, $arr);
                // show($data['approuver_conge']);
                // die();
                
            }else if(isset($_POST['submit_refuser_conge']))
            {
                $arr_refuser['etat'] = "refuse";
                $arr_refuser['id_employee'] = $_POST['id_employee'];
                $arr_refuser['id_conge'] = $_POST['id_conge'];

                $query_refuser_conge = "UPDATE demande_conge SET etat=:etat WHERE id_employee =:id_employee AND id_conge = :id_conge";
                // echo"t as refuser la demande de MRs ". $_POST['nom'] ."! Avec le motif ". $_POST['motif'] ."!!!";
                // die();
                $data['refuser_conge'] = $DB->write($query_refuser_conge, $arr_refuser);
                $query_conge = "SELECT em.id_employee, em.nom, em.prenom,em.matricule,dc.id_conge,  dc.date_debut, dc.date_fin, dc.motif FROM demande_conge dc INNER JOIN employee em ON dc.id_employee = em.id_employee WHERE etat =:etat";
                $data['conge'] = $DB->read($query_conge, $arr);
                
            }


            

            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            // var_dump($data["absence"]);
            // die();
            $data['page_title'] = 'Gestion des conges';
            $this->view("template/gestion_conge", $data);
        }
    }
}

       
}