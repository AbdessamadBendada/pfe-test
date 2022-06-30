<?php

Class Demande_changement_nomination extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = "Demande changement nomination";
            $this->view("template/demande_changement_nomination", $data);
        }

       
}