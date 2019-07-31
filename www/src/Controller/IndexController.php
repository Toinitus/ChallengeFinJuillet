<?php

namespace App\Controller;

use Core\Controller\Controller;

class IndexController extends Controller{

    public function all(){
        return $this->render("index");
    }

    public function gift(){
        return $this->render("giveGift");
    }

    public function legales(){
        return $this->render("mentionLegales");
    }
}