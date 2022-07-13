<?php

class Information_paie extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        // $exists = true;
        $DB = new Database();
        if (!isset($_SESSION['user_id'])) {
            header("Location:" . ROOT . "login");
        } else {
            $query_employee = "SELECT * FROM employee;";
            $data['emp'] = $DB->read($query_employee);
            if (isset($_POST['id_employee']) ||  isset($_POST['submit_modifier']) || isset($_POST['submit_update']) || isset($_POST['submit_ajouter'])) {
                $arr_exists['id_employee'] = $_POST['id_employee'];
                $query = "SELECT * FROM paie WHERE id_employee = :id_employee";
                $data['exists'] = $DB->read($query, $arr_exists);
                if ($data['exists']) {
                    // $data['exists'] = true;
                    if (isset($_POST['submit_update'])) {
                        
                        $arr['id_employee'] = $_POST['id_employee'];
                        $arr['salaire_base'] = $_POST['salaire_brute_modifier'];
                        $arr['rib'] = $_POST['rib_modifier'];
                        $query_modifier = "UPDATE  paie SET  salaire_base =:salaire_base, rib =:rib, id_employee =:id_employee WHERE id_employee = :id_employee";
                        $data_modifier = $DB->write($query_modifier, $arr);
                        if ($data_modifier) {
                            echo "rak ghadi mzian";
                            die;
                        } else {
                            echo "rak maghadich mzian";
                            die;
                        }
                    }
                } else {
                    // $data['exists']  = false;
                    if (isset($_POST['submit_ajouter'])) {
                        $arr['id_employee'] = $_POST['id_employee'];
                        
                        $arr['salaire_base'] = $_POST['salaire_brute_ajouter'];
                        $arr['rib'] = $_POST['rib_ajouter'];
                        $query_ajouter = "INSERT INTO paie(salaire_base, rib, id_employee) VALUES (:salaire_base, :rib, :id_employee)";
                        $data_ajouter = $DB->write($query_ajouter, $arr);
                        if ($data_ajouter) {
                            echo "rak ghadi mzian";
                            die;
                        } else {
                            echo "rak maghadich mzian";
                            die;
                        }
                    }
                }
            }


            // 48458628
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']);
            $data['page_title'] = 'Modifier Information de paie';
            $this->view("template/information_paie", $data);
        }
    }
}
