<?php

namespace App\Controller;

use Core\Controller\Controller;

class NewsController extends Controller{
    public function all(){
        return $this->render("news");
    }
}