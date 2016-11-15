<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
  public function upload(Request $request){
    $file = $request->file('file');
    $filename = str_random(5).$file->getClientOriginalName();
    Storage::disk('s3')->put('uploads/'.$filename, file_get_contents($file), 'public');

    echo "Successfully sent to s3";
  }

}
