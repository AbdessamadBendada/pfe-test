<?php

Class Visite_medecin extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = 'Visite de Medecin de Travail';
            $this->view("template/visite_medecin", $data);
        }

       
}