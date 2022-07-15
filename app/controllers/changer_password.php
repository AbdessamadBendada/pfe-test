<?php

class Changer_password extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $DB = new Database();
        if (!isset($_SESSION['user_id'])) {
            header("Location:" . ROOT . "login");
        } else {




            if (isset($_POST['submit_modifier'])) {

                $arr['id_employee'] = $_SESSION['user_id'];
                $query_emp = "SELECT id_employee, metier, password ,  m.nom  FROM employee em INNER JOIN metier m on em.metier = m.id_metier WHERE id_employee= :id_employee";
                $data['emp'] = $DB->read($query_emp, $arr);

                if ($data['emp'][0]->password == $_POST['old_password']) {
                    $data['password_correct'] = true;
                } else {
                    $data['password_correct'] = false;
                }

                if ($_POST['confirm_password'] != $_POST['new_password']) {
                    $data['password_match'] = false;
                } else {
                    $data['password_match'] = true;
                }
                if ($data['password_correct'] && $data['password_match']) {
                    $arr['password'] = $_POST['confirm_password'];
                    $query = "UPDATE employee SET password = :password WHERE id_employee = :id_employee";
                    $data['changer'] = $DB->write($query, $arr);
                }
            }


            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']);

            $data['page_title'] = "Changer Mot de pass";
            $this->view("template/changer_password", $data);
        }
    }
}
