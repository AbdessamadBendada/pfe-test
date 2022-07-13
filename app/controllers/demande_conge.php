<?php

Class Demande_conge extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $DB= new Database();
            $data = [];
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }
            else{
                
                if(isset($_POST['typeConge']) &&  isset($_POST['motif']) && isset($_POST['datedebut']) && isset($_POST['datefin']) )
                    {
                        $arr['id_employee'] = $_POST['id_employee'];
                        $arr['type_conge'] = $_POST['typeConge'];
                        $arr['date_debut'] = $_POST['datedebut'];
                        $arr['date_fin'] = $_POST['datefin'];
                        $arr['motif'] = $_POST['motif'];
                       $query = "INSERT INTO demande_conge(id_employee, type_conge, date_debut, date_fin, motif) VALUES (:id_employee, :type_conge, :date_debut, :date_fin, :motif)" ;
                       $data_return = $DB->write($query, $arr);
                    

                    }
            
            // $query= "SELECT * FROM demande_conge ";  
            $nbr_restant = $_SESSION['nbr_jrs_restants'];
            $_SESSION['error'] = "";
            if($nbr_restant == 0 )
            {
                    $_SESSION['error'] = "Vous aves epuiser votre nombre de jours de conge pour cette annee!";
            }
            // show($data);
            // die();
            $image_class = $this->loadModel("image_class");
            
            $test[] = $image_class->get_thumbnail($_SESSION['image']) ;
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            $data['page_title'] = 'Demande de Conge';
            $this->view("template/demande_conge", $data);
        
        }
        }

       
}