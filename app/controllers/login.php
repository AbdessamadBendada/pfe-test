<?php

class Login extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {

        $data['page_title'] = 'Se Connecter';

        $user = $this->loadModel("user");
        $user->login($_POST);
        if (isset($_POST['email'])) {
            $_SESSION['username'] =  $_POST['email'];


            $this->view("template/login", $data);
        }



        $this->view("template/login", $data);
    }
}
