<?php

use App\Services\ClientFilmCounterService;
use App\Models\Film;
use App\Models\Client;

class ClientFilmCounterServiceTest extends \PHPUnit_Framework_TestCase
{
	private $clientFilmCounterService;
	
	function __construct() {
		$this->clientFilmCounterService = new ClientFilmCounterService();
	}
	
    function testClientFilmCount()
    {
		$film = new Film();
		$film->setName('Star wars');

		$client = new Client();
		$client->setName('Josu');
		$client->setFilm($film);

		$result = $this->clientFilmCounterService->countFilms($client);
		$this->assertEquals(1, $result);
    }
}
