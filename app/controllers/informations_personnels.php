<?php

Class Informations_personnels extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{
             
            
            $DB = new Database();
            
            $arr['user_id'] = $_SESSION['user_id'];
			$query = "select * from employee where id_employee = :user_id";
 			$data = $DB->read($query, $arr);
            $query_departement = "SELECT * FROM departement;";
            $result_departement = $DB->read($query_departement);
            $query_role = "SELECT * FROM role;";
            // show($result[0]->id_departement);
            $result_role = $DB->read($query_role);
            $query_metier = "SELECT * FROM metier;";
            $result_metier = $DB->read($query_metier);
            foreach($result_metier as $res)
            {
                $id_metier[]= $res->id_metier;
                $nom[]= $res->nom;
            }
            $data['id_metier'] = $id_metier;
            $data['nom_metier'] = $nom;
            foreach($result_role as $res)
            {
                $id_roles[] = $res->id_role;
                $noms[] = $res->nom;
            }
            $data['id_role']= $id_roles;
            $data['nom_role'] = $noms;
            
            foreach($result_departement as $res )
            {
                $id_departements[] = $res->id_departement;
                $nom_departements[] = $res->nom_departement;
            }
            $data['id_departement'] = $id_departements;
            $data['nom_departement'] = $nom_departements;
          
            // $image_class = $this->loadModel("image_class");
            // $data[0]->image = $image_class->get_thumbnail($data[0]->image) ;
            
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
           
            

           
            
            $data['page_title'] = 'Informations Personnels';
            $this->view("template/informations_personnels", $data);
        

        }
        }

       
}