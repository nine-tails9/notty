<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fileinfo;
use App\files;
class FileinfoController extends Controller
{
    //

    public function index(){

    	$data = fileinfo::select('sem')->distinct()->get();

    	return view('Sem', compact('data'));
    }

    public function subject(Request $req){

    	$data = fileinfo::select('subject', 'sem')->where('sem', $req['id'])->distinct('sem')->get();

    	return view('Subject', compact('data'));
    }


    public function files(Request $req){

    	$data = fileinfo::select('files_id')->where(['subject' => $req['name'], 'sem' => $req['id'] ])->get();

    	$files = [];
    	foreach ($data as $key) {
    		# code...
    		$t = files::where('id', $key->files_id)->get();
    		array_push($files, (object)$t);
    	}
    	return view('files', compact('files'));
    }
}
