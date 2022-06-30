<?php

Class Demande_attestation_travaille extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = "Demande attestation de travaille";
            $this->view("template/demande_attestation_travaille", $data);
        }

       
}