<?php

Class Demande_conge extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = 'Demande de Conge';
            $this->view("template/demande_conge", $data);
        }

       
}