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
                if(isset($_POST['heure_sortie']) &&  isset($_POST['motif']) && isset($_POST['heure_retour']) && isset($_POST['date_absence']) )
                    {
                        $arr['id_employee'] = $_POST['id_employee'];
                        $arr['heure_sortie'] = $_POST['heure_sortie'];
                        $arr['heure_retour'] = $_POST['heure_retour'];
                        $arr['date_absence'] = $_POST['date_absence'];
                        $arr['motif'] = $_POST['motif'];
                       $query = "INSERT INTO demande_absence(date_absence, heure_sortie, heure_retour, motif,  id_employee) VALUES (:date_absence, :heure_sortie, :heure_retour, :motif,  :id_employee)" ;
                       $data['success'] = $DB->write($query, $arr);
                   

                    }
            
        
            
            $_SESSION['error'] = "";
           
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            $data['page_title'] = 'Demande d\'absence';
            $this->view("template/demande_absence", $data);
        
        }
        }

       
}