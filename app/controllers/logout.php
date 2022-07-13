<?php

class Logout extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $user = $this->loadModel("user");
        $user->logout();
    }
}
