<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;


class MainController extends Controller {
    public function getPaginatedMangas() {
    	$client = new Client(['base_uri' => 'http://api.ddnsking.com:8080/api/v1/']);
    	$body = $client->get('mangas')->getBody();
		$obj = json_decode($body)->data;
    	return view('index', ['mangas' => $obj]);
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