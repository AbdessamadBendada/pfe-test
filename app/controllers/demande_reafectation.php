<?php

Class Demande_reafectation extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = "Demande Reafectation";
            $this->view("template/demande_reafectation", $data);
        }

       
}