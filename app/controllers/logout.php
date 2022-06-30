<?php

Class Logout extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            // $data['page_title'] = 'Se Connecter';

            $user = $this->loadModel("user");
            $user->logout();
            


           
            
        }

        
}