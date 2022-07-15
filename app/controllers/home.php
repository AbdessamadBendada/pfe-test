<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        if (!isset($_SESSION['user_id'])) {
            header("Location:" . ROOT . "login");
        } else {
            $DB = new Database();

            $arr['id_employee'] = $_SESSION['user_id'];
            $query_conge = "SELECT em.id_employee, em.nom, em.prenom,em.matricule,dc.id_conge,dc.etat,  dc.date_debut, dc.date_fin, dc.motif FROM demande_conge dc INNER JOIN employee em ON dc.id_employee = em.id_employee WHERE em.id_employee=:id_employee order by dc.id_conge desc limit 5 ";
            $data['conge'] = $DB->read($query_conge, $arr);

            $query_absence = "SELECT em.id_employee, em.nom, em.prenom,em.matricule,da.id_absence,da.etat,  da.date_absence, da.heure_sortie, da.heure_retour, da.motif FROM demande_absence da INNER JOIN employee em ON da.id_employee = em.id_employee WHERE em.id_employee =:id_employee order by da.id_absence desc limit 5";
            $data['absence'] = $DB->read($query_absence, $arr);
            $data['page_title'] = 'Accueil';
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']);
            $this->view("template/index", $data);
        }
    }
}
