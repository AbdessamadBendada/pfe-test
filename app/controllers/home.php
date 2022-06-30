<?php

Class Home extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            // $DB = new Database();
            // $data['result'] = $DB->read("select * from images"); 
            $data['page_title'] = 'Accueil';

            // show($data[1]->id);
            // $image_class = $this->loadModel("image_class");
            $this->view("template/index", $data);
        }

        
}