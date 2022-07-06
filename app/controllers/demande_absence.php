<?php

Class Demande_absence extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $DB= new Database();
           
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
                       $data = $DB->write($query, $arr);
                       if($data)
                       {
                        echo"rah koulchi ghadi mzian a 3chiri";
                        die();

                       }else{
                        echo"rah ghi katkhwwer a 3chiri ";
                        die();
                       }

                    }
            
        
            
            $_SESSION['error'] = "";
           
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            $data['page_title'] = 'Demande d\'absence';
            $this->view("template/demande_absence", $data);
        
        }
        }

       
}