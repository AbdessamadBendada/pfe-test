<?php

Class Demande_changement_nomination extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            $data['page_title'] = "Demande changement nomination";
            $this->view("template/demande_changement_nomination", $data);
            }
        }

       
}