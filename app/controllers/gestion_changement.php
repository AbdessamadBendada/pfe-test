<?php

class Gestion_changement extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $DB = new Database();



        if ($_SESSION['role'] == 1) {
            header("Location:" . ROOT . "home");
        } else {
            if (!isset($_SESSION['user_id'])) {
                header("Location:" . ROOT . "login");
            } else {
                $arr['etat'] = "attente";
                // $arr_nomination['id_employee'] = $_SESSION['user_id'];
                $query_nomination = "SELECT  n.id_changement_nomination, em.id_employee,em.matricule,em.prenom, em.nom , n.ancien_metier,   n.nouveau_metier,  m.nom as 'ancien_metier' , nm.nom as 'nouveau_metier', nm.id_metier as 'id_nv_metier'
            FROM demande_changement_nomination n inner join employee em on n.id_employee = em.id_employee
            inner join metier m on n.ancien_metier = m.id_metier inner join metier nm on n.nouveau_metier = nm.id_metier WHERE  n.etat = 'attente' ";
                $data['nomination'] = $DB->read($query_nomination);
                if (isset($_POST['submit_approuver_nomination'])) {
                    $arr_approuver['etat'] = "approuve";
                    $arr_approuver['id_employee'] = $_POST['id_employee'];
                    $arr_approuver['id_demande_nomination'] = $_POST['id_demande_nomination'];
                    $query_approuver_nomination = "UPDATE demande_changement_nomination SET etat=:etat WHERE id_employee =:id_employee AND id_changement_nomination = :id_demande_nomination";
                    $data['approuver_nomination'] = $DB->write($query_approuver_nomination, $arr_approuver);
                    $query_nomination = "SELECT  n.id_changement_nomination, em.id_employee,em.matricule,em.prenom, em.nom , n.ancien_metier,   n.nouveau_metier,  m.nom as 'ancien_metier' , nm.nom as 'nouveau_metier', nm.id_metier as 'id_nv_metier'
                    FROM demande_changement_nomination n inner join employee em on n.id_employee = em.id_employee
                    inner join metier m on n.ancien_metier = m.id_metier inner join metier nm on n.nouveau_metier = nm.id_metier WHERE  n.etat = 'attente' ";

                    $data['nomination'] = $DB->read($query_nomination);
                    if ($data['approuver_nomination']) {
                        $arr_update_emp['metier'] = $_POST['id_nv_metier'];
                        $arr_update_emp['id_employee'] = $_POST['id_employee'];
                        $query_update_emp = "UPDATE employee SET metier = :metier WHERE id_employee = :id_employee";
                        $DB->write($query_update_emp, $arr_update_emp);
                    }
                } else if (isset($_POST['submit_refuser_nomination'])) {
                    $arr_refuser['etat'] = "refuse";
                    $arr_refuser['id_employee'] = $_POST['id_employee'];
                    $arr_refuser['id_demande_nomination'] = $_POST['id_demande_nomination'];
                    $query_refuser_nomination = "UPDATE demande_changement_nomination SET etat=:etat WHERE id_employee =:id_employee AND id_changement_nomination = :id_demande_nomination";
                    $data['refuser_nomination'] = $DB->write($query_refuser_nomination, $arr_refuser);
                    $query_nomination = "SELECT  n.id_changement_nomination, em.id_employee,em.matricule,em.prenom, em.nom , n.ancien_metier,   n.nouveau_metier,  m.nom as 'ancien_metier' , nm.nom as 'nouveau_metier', nm.id_metier as 'id_nv_metier'
                    FROM demande_changement_nomination n inner join employee em on n.id_employee = em.id_employee
                    inner join metier m on n.ancien_metier = m.id_metier inner join metier nm on n.nouveau_metier = nm.id_metier WHERE  n.etat = 'attente' ";

                    $data['nomination'] = $DB->read($query_nomination);
                }
                $image_class = $this->loadModel("image_class");
                $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']);
                $data['page_title'] = 'Gestion changement des nominations';
                $this->view("template/gestion_changement", $data);
            }
        }
    }
}
