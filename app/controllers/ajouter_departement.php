<?php

Class Ajouter_departement extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $DB = new Database();
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{
                
                
                
                

               
                if(isset($_POST['submit_insert']))
                {
                    $arr['nom_departement'] = $_POST['nom_departement']; 
                    $query_demande_nomination = "INSERT INTO departement (nom_departement) VALUES (:nom_departement)";
                    $data['success']=$DB->write($query_demande_nomination, $arr);
                    // $data['demande_changement_nomination'] = $DB->write($query_demande_nomination, $arr);
                    
                        // var_dump($arr['metier']);
                        // die();
                    // $query_changement_nomination = "UPDATE employee SET metier= :nv_metier WHERE id_employee = :id_employee";
                    // $data['nomination'] = $DB->write($query_changement_nomination, $arr);

                 
                }
                $image_class = $this->loadModel("image_class");
                $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']);
                // show($data['emp'][0]);
                // die();
                $data['page_title'] = "Ajouter Département";
                $this->view("template/ajouter_departement", $data);


            }
        }

       
}