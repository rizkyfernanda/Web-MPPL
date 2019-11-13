<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function upload()
    {
		return view('upload');
	}
 
	public function proses_upload(Request $request)
	{
		$this->validate($request, [
			'file' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$filename = time()."_".$file->getClientOriginalName();

		// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'pictures';
		$file->move($tujuan_upload,$file->getClientOriginalName());

	}
