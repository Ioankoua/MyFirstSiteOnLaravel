<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;

class ZipController extends Controller
{
	public function Zip()
	{
    $zip = new ZipArchive;
    $filename = 'myzip.zip';
    if($zip->open(public_path($filename), ZipArchive::CREATE)==TRUE)
    {
    	$files = File::files(public_path('myfiles'));
    	foreach ($files as $key => $value) {
    		$relativeName = basename($value);
    		$zip->addFile($value,$relativeName);
    	}
    	$zip->close();
    }
    return responce()->download(public_path($filename));
}
}
