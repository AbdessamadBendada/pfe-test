<?php

Class Demande_attestation_salaire extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = "Demande attestation de salaire";
            $this->view("template/demande_attestation_salaire", $data);
        }

       
}