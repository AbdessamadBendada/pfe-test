<?php

Class Visite_medecin extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{
                $image_class = $this->loadModel("image_class");
                $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
                $data['page_title'] = 'Visite de Medecin de Travail';
                $this->view("template/visite_medecin", $data);
            }
        }

       
}