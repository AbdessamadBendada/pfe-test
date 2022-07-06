<?php

Class About extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            $data['page_title'] = 'About';
            $this->view("about", $data);
        }

       
}