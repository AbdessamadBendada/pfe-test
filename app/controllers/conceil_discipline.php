<?php

Class Conceil_discipline extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = 'Conceil Discipline';
            $this->view("template/conceil_discipline", $data);
        }

       
}