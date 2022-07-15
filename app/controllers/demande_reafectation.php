<?php

class Demande_reafectation extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $DB = new Database();
        if (!isset($_SESSION['user_id'])) {
            header("Location:" . ROOT . "login");
        } else {
            $arr_id['id_employee'] = $_SESSION['user_id'];
            $query_emp = "SELECT em.nom, d.nom_departement, d.id_departement FROM employee em INNER JOIN departement d ON em.id_departement = d.id_departement WHERE id_employee = :id_employee";

            $data['emp'] = $DB->read($query_emp, $arr_id);
            $data['ancien_id_departement'] = $data['emp'][0]->id_departement;

            $query_departement = "SELECT * FROM departement ;";
            $data['departement'] = $DB->read($query_departement);
            if (isset($_POST['nv_departement'])) {

                $arr_reaf['id_employee'] = $_SESSION['user_id'];
                $arr_reaf['id_departement'] = $_POST['nv_departement'];
                $arr_reaf['ancien_departement'] = $data['ancien_id_departement'];
                $query_reaectation = "INSERT INTO  demande_reafectation ( id_employee ,  ancien_departement ,  nouveau_departement ) VALUES (:id_employee ,  :ancien_departement ,  :id_departement);";
                $data['reafectation'] = $DB->write($query_reaectation, $arr_reaf);
                $query_emp = "SELECT em.nom, d.nom_departement, d.id_departement FROM employee em INNER JOIN departement d ON em.id_departement = d.id_departement WHERE id_employee = :id_employee";
                $data['emp'] = $DB->read($query_emp, $arr_id);
            }

            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']);
            $data['page_title'] = "Demande Reafectation";
            $this->view("template/demande_reafectation", $data);
        }
    }
}
