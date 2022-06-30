<?php

Class Bulletin_paie extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = 'Bulletin de Paie';
            $this->view("template/bulletin_paie", $data);
        }

       
}