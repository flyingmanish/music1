<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MusicController extends Controller
{
    public function getsongs(){
    	$songs = DB::table('music_tbl')->get();
    	// print_r($songs);
    	echo json_encode($songs); 
    	 
    	


    }
}





