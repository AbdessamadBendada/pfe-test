<?php

class Attestation extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {   
        $DB = new Database();
        if (!isset($_SESSION['user_id'])) {
            header("Location:" . ROOT . "login");
        } else {
            $arr['id_employee'] =  $_SESSION['user_id'];
            $query = "SELECT nom, prenom, cin, cnss, date_debut, salaire_base from employee em inner join paie p on p.id_employee = em.id_employee where p.id_employee = :id_employee";
            $data['info'] =  $DB->read($query, $arr);
            
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']);
            $data['page_title'] = 'Attestation Travail & Salaire';
            $this->view("template/attestation", $data);
        }
    }
}
