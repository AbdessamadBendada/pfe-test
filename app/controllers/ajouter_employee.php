<?php

Class Ajouter_employee extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{

           
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            $this->ajouter_employee();
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

        public function ajouter_employee()
        {
            $user =  $this->loadModel("user");
            $result = $user->checkSignin();
            if(!$result)
            {
                echo $_SESSION['user_id'];
                echo "it s not good";
                    // header("Location:".ROOT. "login");
                    die();
            }

        // if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_naissance']) && isset($_POST['cin']) && isset($_POST['matricule']) && isset($_POST['metier']) && isset($_POST['situation_familliale'])&& isset($_POST['email']) && isset($_POST['departement'])&& isset($_POST['adresse'])&& isset($_POST['tel'])&& isset($_FILES['image']))
        // if(isset($POST['submit']))
		// {
            $ajouter_emp = $this->loadModel("ajouter");
            $ajouter_emp->ajouterEmployee($_POST, $_FILES);
            


        // }

        
        // show($_SESSION['error']);
        // die();

        }

       
}