<?php

class Ajouter_departement extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $DB = new Database();
        if (!isset($_SESSION['user_id'])) {
            header("Location:" . ROOT . "login");
        } else {

            if (isset($_POST['submit_insert'])) {
                $arr['nom_departement'] = $_POST['nom_departement'];
                $query_demande_nomination = "INSERT INTO departement (nom_departement) VALUES (:nom_departement)";
                $data['success'] = $DB->write($query_demande_nomination, $arr);
            }
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']);

            $data['page_title'] = "Ajouter Département";
            $this->view("template/ajouter_departement", $data);
        }
    }
}
