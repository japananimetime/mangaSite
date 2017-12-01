<?php

namespace App\Http\Controllers;
// use Storage;
// use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Mail;

class MangasController extends Controller {
    public function getPaginatedMangas() {
		$mangas = DB::table('mangas')->Paginate(8);
		$covers	= DB::connection('mongodb')->collection("mangas")->get();
		// echo $covers;
		$result = array( 'mangas' => $mangas, 'covers' => $covers);		
		return response()->json($result);
	}
	public function getSpecifiedManga($id) {
		$manga = DB::table('mangas')->where('id',$id)->first();		
		$cover	= DB::connection('mongodb')->collection("mangas")->get()->where('_id',$id);
		$manga->cover=$cover[$id-1]['name'];
		// echo '<pre>'; print_r($cover[$id-1]); echo '</pre>';
		// $result = array( 'manga' => $manga, 'cover' => );		
		return response()->json($manga);
	}

	public function addNewManga() {
		// echo '<pre>'; print_r($_POST); echo '</pre>';
		if (!file_exists("/var/www/html/images/".$_POST['uploaderID']."/")) {
		    mkdir("/var/www/html/images/".$_POST['uploaderID']."/", 0777, true);
		    $target_dir="/var/www/html/images/".$_POST['uploaderID']."/";
		}
		else {
			$target_dir="/var/www/html/images/".$_POST['uploaderID']."/";
		}
		$filename=uniqid().$_FILES["cover"]["name"];
		if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_dir.$filename)) {
		    // echo "The file ". basename( $_FILES["cover"]["name"]). " has been uploaded.";
		} else {
		    echo "Sorry, there was an error uploading your file.";
		}
		$maxID = DB::table('mangas')->max('id');

		DB::insert("insert into mangas (title,author,descripton,volumes,chapters,releaser_id) values ('".$_POST['title']."','".$_POST['author']."','".$_POST['description']."',".$_POST['volumes'].",".$_POST['chapters'].",".$_POST['uploaderID'].")");
		DB::connection('mongodb')->collection("mangas")->insert(['_id' => $maxID + 1, 'name' => $filename]);

		$url="http://japananimetime.ddns.net";
		header("Location: $url");
	}

}