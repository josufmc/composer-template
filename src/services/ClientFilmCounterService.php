<?php
namespace App\Services;

use App\Models\Client;

class ClientFilmCounterService {
    public function countFilms(Client $client){
        if ($client == null) return 0;
        if ($client->getFilm() == null) return 0;
        return 1;
    }
}