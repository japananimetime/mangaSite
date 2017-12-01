<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;


class MainController extends Controller {
    public function getPaginatedMangas() {
    	$client = new Client(['base_uri' => 'http://api.ddnsking.com:8080/api/v1/']);
    	// $body = $client->get('mangas')->getBody();
		// $obj = json_decode($body)->data;
		$mangas = json_decode($client->get('mangas')->getBody())->mangas->data;
		$covers = json_decode($client->get('mangas')->getBody())->covers;
    	return view('index', ['mangas' => $mangas, 'covers' => $covers]);
    	// echo '<pre>'; print_r(json_decode($client->get('mangas')->getBody())->covers[0]); echo '</pre>';
	}
	public function getSpecifiedManga($id) {
    	$client = new Client(['base_uri' => 'http://api.ddnsking.com:8080/api/v1/']);
    	$str = 'manga/'.(string)$id;
    	$body = $client->get($str)->getBody();
		$obj = json_decode($body);
		// echo '<pre>'; print_r($obj); echo '</pre>';
		return view('manga', ['manga' => $obj]);
	}
}