<?php

class Gestion_absence extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $DB = new Database();

        $arr['etat'] = "attente";

        if ($_SESSION['role'] == 1) {
            header("Location:" . ROOT . "home");
        } else {
            if (!isset($_SESSION['user_id'])) {
                header("Location:" . ROOT . "login");
            } else {


                //querying the absence table 
                $query_absence = "SELECT em.id_employee, em.nom, em.prenom,em.matricule,da.id_absence,  da.date_absence, da.heure_sortie, da.heure_retour, da.motif FROM demande_absence da INNER JOIN employee em ON da.id_employee = em.id_employee WHERE etat =:etat";
                $data['absence'] = $DB->read($query_absence, $arr);

                // show($data);
                // die();
                if (isset($_POST['submit_approuver_absence'])) {
                    // echo"t as approuver la demande d'absence de MRs ". $_POST['nom'] ."! Avec le motif ". $_POST['motif'] ."!!!";
                    // die();
                    $arr_approuver['etat'] = "approuve";
                    $arr_approuver['id_employee'] = $_POST['id_employee'];
                    $arr_approuver['id_absence'] = $_POST['id_absence'];
                    $query_approuver_absence = "UPDATE demande_absence SET etat=:etat WHERE id_employee =:id_employee AND id_absence = :id_absence";
                    $data['approuver_absence'] = $DB->write($query_approuver_absence, $arr_approuver);
                    $query_absence = "SELECT em.id_employee, em.nom, em.prenom,em.matricule,da.id_absence,  da.date_absence, da.heure_sortie, da.heure_retour, da.motif FROM demande_absence da INNER JOIN employee em ON da.id_employee = em.id_employee WHERE etat =:etat";
                    $data['absence'] = $DB->read($query_absence, $arr);
                    // if($data['approuver_absence'])
                    // {
                    //     echo"t as approuver la demande d'absence de MRs ". $_POST['nom'] ."! Avec le motif ". $_POST['motif'] ."!!!";
                    //     die();
                    // }
                } else if (isset($_POST['submit_refuser_absence'])) {

                    $arr_refuser['etat'] = "refuse";
                    $arr_refuser['id_employee'] = $_POST['id_employee'];
                    $arr_refuser['id_absence'] = $_POST['id_absence'];

                    $query_refuser_absence = "UPDATE demande_absence SET etat=:etat WHERE id_employee =:id_employee AND id_absence = :id_absence";

                    $data['refuser_absence'] = $DB->write($query_refuser_absence, $arr_refuser);
                    $query_absence = "SELECT em.id_employee, em.nom, em.prenom,em.matricule,da.id_absence,  da.date_absence, da.heure_sortie, da.heure_retour, da.motif FROM demande_absence da INNER JOIN employee em ON da.id_employee = em.id_employee WHERE etat =:etat";
                    $data['absence'] = $DB->read($query_absence, $arr);
                    // if($data['refuser_absence'])
                    // {
                    //     echo"t as refuser la demande d'absence de MRs ". $_POST['nom'] ."! Avec le motif ". $_POST['motif'] ."!!!";
                    //     die();
                    // }


                }







                $image_class = $this->loadModel("image_class");
                $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']);
                // var_dump($data["absence"]);
                // die();
                $data['page_title'] = 'Demandes des absences';
                $this->view("template/gestion_absence", $data);
            }
        }
    }
}
