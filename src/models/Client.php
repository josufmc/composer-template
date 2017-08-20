<?php
namespace App\Models;

use App\Models\Film;

class Client {
    private $name;
    private $film = null;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getFilm(){
        return $this->film;
    }

    public function setFilm(Film $film){
        $this->film = $film;
    }
}