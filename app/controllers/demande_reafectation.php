<?php

Class Demande_reafectation extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $DB = new Database();
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{
                $arr['id_employee'] = $_SESSION['user_id'];
                $query_emp = "SELECT em.nom, d.nom_departement, d.id_departement, s.id_service, s.nom_service, e.id_entite, e.nom_entite FROM employee em INNER JOIN departement d ON em.id_departement = d.id_departement INNER JOIN service s ON d.id_service = s.id_service INNER JOIN entite e ON s.id_entite = e.id_entite WHERE id_employee = :id_employee";
                $data['emp'] = $DB->read($query_emp, $arr);
                if($data['emp'])
                {
                    
                }
                $image_class = $this->loadModel("image_class");
                $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
                $data['page_title'] = "Demande Reafectation";
                $this->view("template/demande_reafectation", $data);
            }
        }

       
}