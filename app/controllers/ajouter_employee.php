<?php

Class Ajouter_employee extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = 'Ajouter Employee';
            $this->view("template/ajouter_employee", $data);
        }

       
}