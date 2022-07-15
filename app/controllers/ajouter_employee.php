<?php

Class Ajouter_employee extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            
            if($_SESSION['role'] == 1){
                header("Location:".ROOT. "home");
            } else{
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{

           
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            $data['success'] = $this->ajouter_employee();
            // show($data);
            $DB = new Database();
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
          
            // show($data);
            // die;
            
            $data['page_title'] = 'Ajouter Employee';
            $this->view("template/ajouter_employee", $data);
        }
    }
           
        }

        public function ajouter_employee()
        {
            $user =  $this->loadModel("user");
            $result = $user->checkSignin();
            
            $ajouter_emp = $this->loadModel("ajouter");
           return $ajouter_emp->ajouterEmployee($_POST, $_FILES);
            
            


  

        
      
        }

       
}