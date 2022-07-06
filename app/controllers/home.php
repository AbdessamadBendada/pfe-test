<?php

Class Home extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{
            // $DB = new Database();
            // $data['result'] = $DB->read("select * from images"); 
            $data['page_title'] = 'Accueil';

            // show($data[1]->id);
            // $image_class = $this->loadModel("image_class");
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            $this->view("template/index", $data);
            }
        }

        
}