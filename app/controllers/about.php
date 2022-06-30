<?php

Class About extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = 'About';
            $this->view("about", $data);
        }

       
}