<?php

Class Demande_changement_nomination extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $DB = new Database();
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{
                $query_metier = "SELECT * FROM metier";
                $data['metier']= $DB->read($query_metier);
                
                $arr['id_employee'] = $_SESSION['user_id'];
                $query_emp = "SELECT id_employee, metier,  m.nom  FROM employee em INNER JOIN metier m on em.metier = m.id_metier WHERE id_employee= :id_employee";
                
                $data['emp'] = $DB->read($query_emp, $arr);

               
                if(isset($_POST['sumbit_nomination']))
                {
                    $arr['nv_metier'] = $_POST['nv_nomination'] ;
                    $arr['id_employee'] = $_POST['id_employee'];
                    $arr['old_metier'] = $data['emp'][0]->metier;
                    $query_demande_nomination = "INSERT INTO demande_changement_nomination (id_employee, ancien_metier, nouveau_metier) VALUES (:id_employee, :old_metier, :nv_metier)";
                    $data['demande_changement_nomination'] = $DB->write($query_demande_nomination, $arr);
                    
                        // var_dump($arr['metier']);
                        // die();
                    // $query_changement_nomination = "UPDATE employee SET metier= :nv_metier WHERE id_employee = :id_employee";
                    // $data['nomination'] = $DB->write($query_changement_nomination, $arr);

                 
                }
                $image_class = $this->loadModel("image_class");
                $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']);
                // show($data['emp'][0]);
                // die();
                $data['page_title'] = "Demande changement nomination";
                $this->view("template/demande_changement_nomination", $data);


            }
        }

       
}