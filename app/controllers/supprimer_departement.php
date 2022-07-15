<?php

class Supprimer_departement extends Controller
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





                $image_class = $this->loadModel("image_class");
                $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']);


                $query_departement = "SELECT * FROM departement;";
                $data['departement'] = $DB->read($query_departement);
                if (isset($_POST["submit_supprimer"])) {
                    $arr_delete['id_departement'] = $_POST['id_departement'];

                    $query_supprimer = "DELETE FROM departement WHERE id_departement=:id_departement";
                    $data['success'] = $DB->write($query_supprimer, $arr_delete);

                    $query_departement = "SELECT * FROM departement;";
                    $data['departement'] = $DB->read($query_departement);
                }



                $data['page_title'] = 'Supprimer Département';
                $this->view("template/supprimer_departement", $data);
            }
        }
    }
}
