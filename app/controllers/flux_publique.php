<?php

Class Flux_publique extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = 'Flux Publique';
            $this->view("template/flux_publique", $data);
        }

       
}