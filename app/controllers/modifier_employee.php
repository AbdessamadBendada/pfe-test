<?php

Class Modifier_employee extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            if ($_SESSION['role'] == 1) {
                header("Location:" . ROOT . "home");
            } else {
               
            $DB = new Database();
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{

                
                

           
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            // $this->ajouter_employee();
            
            $query_employee = "SELECT * FROM employee order by id_employee desc;";
            $data['emp'] = $DB->read($query_employee);


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
            
            
            
            if(isset($_POST["submit_update"]))
                {
                    
                    $arr_update['matricule'] = $_POST['matricule'];
                    $arr_update['nom'] = $_POST['nom'];
                    $arr_update['prenom'] = $_POST['prenom'];
                    $arr_update['date_naissance'] = $_POST['date_naissance'];
                    $arr_update['cin'] = $_POST['cin'];
                    $arr_update['metier'] = $_POST['metier'];
                    $arr_update['role'] = $_POST['role'];
                    $arr_update['sexe'] = $_POST['sexe'];
                    $arr_update['situation_familiale'] = $_POST['situation_familiale'];
                    $arr_update['email'] = $_POST['email'];
                    $arr_update['id_departement'] = $_POST['id_departement'];
                    $arr_update['tel'] = $_POST['tel'];
                    $arr_update['adresse'] = $_POST['adresse'];
                    $arr_update['id_employee'] = $_POST['id_employee'];
                    
                    $query_update = "UPDATE  employee  SET  matricule = :matricule, nom =:nom, prenom =:prenom, date_naissance =:date_naissance, adresse =:adresse, situation_familiale =:situation_familiale, cin =:cin, email =:email, id_departement =:id_departement,  sexe =:sexe, role =:role, metier =:metier, tel =:tel WHERE id_employee = :id_employee;";

                    $data_update = $DB->write($query_update, $arr_update);
                    $query_employee = "SELECT * FROM employee order by id_employee desc;";
                    $data['emp'] = $DB->read($query_employee);
                
                }

         
            
                $data['page_title'] = 'Modifier Employee';
                $this->view("template/modifier_employee", $data);

            }
           
        }

    }

    
}
