<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MangasController extends Controller {
    public function getPaginatedMangas() {
		$mangas = DB::table('mangas')->Paginate(8);
		return response()->json($mangas);
	}
	public function getSpecifiedManga($id) {
		$manga = DB::table('mangas')->where('id',$id)->first();
		return response()->json($manga);
	}
}