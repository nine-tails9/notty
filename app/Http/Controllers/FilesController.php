<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\files;
use App\fileinfo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
class FilesController extends Controller
{
    //

    public function add(Request $req)
    {
    	# code...
        $req->validate([

            'docfile' => 'required',
            'sem' => 'required',
            'teacher' => 'required',
            'subject' => 'required'

        ]);

    	$file = $req->file('docfile');
    	$extension = $file->getClientOriginalExtension();
    	Storage::disk('public')->put($file->getFilename().'.'.$extension,  File::get($file));
		$entry = new files;
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename = $file->getFilename().'.'.$extension;
        $entry->user_id = auth()->user()->id;
		$entry->save();

        $data = new fileinfo;

        $data['files_id'] = $entry['id'];
        $data['user_id'] = auth()->user()->id;
        $data['sem'] = $req['sem'];
        $data['teacher'] = $req['teacher'];
        $data['subject'] =$req['subject'];
        $data->save();

		return redirect('/home'); 
    }
     public function down(Request $req)
    {
        # code...

        $name = files::where('filename', $req['file'])->value('original_filename');
        Storage::disk('public')->download($req['file'], $name);
        
        return redirect('/home'); 
    }

}
