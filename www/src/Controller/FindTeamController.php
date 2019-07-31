<?php

namespace App\Controller;

use Core\Controller\Controller;

class FindTeamController extends Controller{
    public function rechercheequipe(){


        return $this->render("findTeam");


    }

    public function equipe(){


        return $this->render("team");


    }
}