<?php

Class Informations_personnels extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = 'Informations Personnels';
            $this->view("template/informations_personnels", $data);
        }

       
}