<?php

namespace App\Controller;

use Core\Controller\Controller;

class UserController extends Controller{
    
    public function login(){
        return $this->render("user/login");
    }


    public function subscribe(){
        return $this->render("user/subscribe");
    }


}