<?php

Class Demande_attestation_salaire extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            $data['page_title'] = "Demande attestation de salaire";
            $this->view("template/demande_attestation_salaire", $data);
            }
        }

       
}