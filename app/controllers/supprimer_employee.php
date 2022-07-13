<?php

Class Supprimer_employee extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            
            $DB = new Database();
            if ($_SESSION['role'] == 1) {
                header("Location:" . ROOT . "home");
            } else {
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{

                
                

           
                    $image_class = $this->loadModel("image_class");
                    $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            
            
                    $query_employee = "SELECT * FROM employee;";
                    $data['emp'] = $DB->read($query_employee);
                    if(isset($_POST["submit_supprimer"]))
                        {
                            $arr_delete['id_employee'] = $_POST['id_employee'];
                            $arr_delete['matricule']= $_POST['matricule'] ;
                            $query_supprimer = "DELETE FROM employee WHERE id_employee=:id_employee AND matricule = :matricule";
                            $data_delete = $DB->write($query_supprimer, $arr_delete);
                           
                            $query_employee = "SELECT * FROM employee;";
                            $data['emp'] = $DB->read($query_employee);
                        }

                
                    
                        $data['page_title'] = 'Supprimer Employee';
                        $this->view("template/supprimer_employee", $data);

            }
           
        }

       
    }
    
    }
