<?php

Class Gestion_reafectation extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $DB = new Database();
            
            if ($_SESSION['role'] == 1) {
                header("Location:" . ROOT . "home");
            } else {
                if (!isset($_SESSION['user_id'])) {
                    header("Location:" . ROOT . "login");
                } else {
            $arr['etat'] = "attente";


            // $arr_reafectation['id_employee'] = $_POST['id_employee'];
            $query_reaffectation ="SELECT em.id_employee,em.matricule,em.prenom, em.nom , dr.id_reafectation, dr.ancien_departement, dr.nouveau_departement, d.nom_departement as 'ancien_departement' , dn.nom_departement as 'nouveau_departement' , dn.id_departement FROM demande_reafectation dr inner join employee em on dr.id_employee =em.id_employee inner join departement d on dr.ancien_departement = d.id_departement inner join departement dn on  dr.nouveau_departement = dn.id_departement where dr.etat ='attente'";
            $data['reaffectation']=$DB->read($query_reaffectation);
                //    show($data['reaffectation']);die; 
            if(isset($_POST['submit_approuver_reafectation']))
            {
                $arr_approuver['etat'] = "approuve";
                $arr_approuver['id_employee'] = $_POST['id_employee'];
                $arr_approuver['id_reafectation'] = $_POST['id_reafectation'];
                $query_approuver_reafectation = "UPDATE demande_reafectation SET etat=:etat WHERE id_employee =:id_employee AND id_reafectation = :id_reafectation";
                $data['approuver_reafectation'] = $DB->write($query_approuver_reafectation, $arr_approuver);
                
            
              
                if($data['approuver_reafectation'])
                {
                    $arr_update_emp['id_departement']= $_POST['id_nv_departement'];
                    $arr_update_emp['id_employee']= $_POST['id_employee'];
                   
                    
                    $query_update_emp = "UPDATE employee SET id_departement = :id_departement WHERE id_employee = :id_employee";
                    $DB->write($query_update_emp, $arr_update_emp);
                    $query_reaffectation ="SELECT em.id_employee,em.matricule,em.prenom, em.nom , dr.id_reafectation, dr.ancien_departement, dr.nouveau_departement, d.nom_departement as 'ancien_departement' , dn.nom_departement as 'nouveau_departement' , dn.id_departement FROM demande_reafectation dr inner join employee em on dr.id_employee =em.id_employee inner join departement d on dr.ancien_departement = d.id_departement inner join departement dn on  dr.nouveau_departement = dn.id_departement AND dr.etat ='attente'";
            $data['reaffectation']=$DB->read($query_reaffectation);
                    
                }
            }else if(isset($_POST['submit_refuser_reafectation']))
            {
                $arr_refuser['etat'] = "refuse";
                $arr_refuser['id_employee'] = $_POST['id_employee'];
                $arr_refuser['id_reafectation'] = $_POST['id_reafectation'];
                $query_refuser_reafectation = "UPDATE demande_reafectation SET etat=:etat WHERE id_employee =:id_employee AND id_reafectation = :id_reafectation";
                $data['refuser_reafectation'] = $DB->write($query_refuser_reafectation, $arr_refuser);
                $query_reaffectation ="SELECT em.id_employee,em.matricule,em.prenom, em.nom , dr.id_reafectation, dr.ancien_departement, dr.nouveau_departement, d.nom_departement as 'ancien_departement' , dn.nom_departement as 'nouveau_departement' , dn.id_departement FROM demande_reafectation dr inner join employee em on dr.id_employee =em.id_employee inner join departement d on dr.ancien_departement = d.id_departement inner join departement dn on  dr.nouveau_departement = dn.id_departement where dr.etat ='attente'";
            $data['reaffectation']=$DB->read($query_reaffectation);
                
            }





            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            // var_dump($data["absence"]);
            // die();
            $data['page_title'] = 'Gestion des reafectations';
            $this->view("template/gestion_reafectation", $data);
        }
    }}

       
}