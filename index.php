<?php 
require __DIR__ . './vendor/autoload.php';

use App\Models\Client;
use App\Models\Film;

use App\Services\ClientFilmCounterService;

$film = new Film();
$film->setName('Star wars');

$client = new Client();
$client->setName('Josu');
$client->setFilm($film);

$clientFilmCounterService = new ClientFilmCounterService();

d($clientFilmCounterService->countFilms($client));