<?php

Class Ajouter_employee extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $this->ajouter_employee();
            $DB = new Database();
            $query = "SELECT * FROM departement";
            $result = $DB->read($query);
            // show($result[0]->id_departement);
            foreach($result as $res ){
                $id_departements[] = $res->id_departement;
                $nom_departements[] = $res->nom_departement;
            }
            $data['id_departement'] = $id_departements;
            $data['nom_departement'] = $nom_departements;
          
           
            
            $data['page_title'] = 'Ajouter Employee';
            $this->view("template/ajouter_employee", $data);
            

        }

        public function ajouter_employee()
        {
            $user =  $this->loadModel("user");
            $result = $user->checkSignin();
            if(!$result)
            {
                echo $_SESSION['user_id'];
                echo "ir s not good";
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