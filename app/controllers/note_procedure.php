<?php

Class Note_procedure extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $data['page_title'] = 'Note de Procedure';
            $this->view("template/note_procedure", $data);
        }

       
}