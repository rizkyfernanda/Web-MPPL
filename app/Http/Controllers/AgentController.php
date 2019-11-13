<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('agent-pages.index');
    }

   	public function view_users()
	{
		// mengambil data dari table users
    	$users = DB::table('users')->get();
 
    	// mengirim data user ke view index
    	return view('agent-pages.users',['users' => $users]);
	}

	public function view_maids()
	{
		// mengambil data dari table maids
    	$maids = DB::table('maids')->get();
 
    	// mengirim data maid ke view maids
    	return view('agent-pages.maids',['maids' => $maids]);
	}



	public function add()
	{
		return view('agent-pages.add-maid');
	}

	public function store(Request $request)
	{

		// Buat input2 jenis checkbox
		$married = $request->married;
		$settled = $request->settled;

		// Set input checkbox menjadi 0 jika kosong
		if($married === NULL) {$married = 0;}
		if($settled === NULL) {$settled = 0;}

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$filename = time()."_".$file->getClientOriginalName();

		// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'pictures';
		$file->move($tujuan_upload,$filename);

		// Submit data maid----------------------------------------------------
		DB::table('maids')->insert([
			'maid_id' => $request->id,
			'name' => $request->name,
			'age' => $request->age,
			'salary' => $request->salary,
			'married' => $married,
			'settled' => $settled,
			'religion' => $request->religion,
			'exp_years' => $request->exp_years,
			'description' => $request->description,
			'picture' => $filename,
		]);

		// alihkan halaman ke halaman maids
		return redirect('/agent/view-maids');
	}



	public function edit($maid_id)
	{
		$maids = DB::table('maids')->where('maid_id',$maid_id)->get();
		return view('agent-pages.edit-maid', ['maids' => $maids]);
	}

	public function update(Request $request)
	{	

		// Buat input2 jenis checkbox
		$married = $request->married;
		$settled = $request->settled;

		// Set input checkbox menjadi 0 jika kosong
		if($married === NULL) {$married = 0;}
		if($settled === NULL) {$settled = 0;}

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$filename = time()."_".$file->getClientOriginalName();

		// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'pictures';
		$file->move($tujuan_upload,$filename);

		// Submit data maid
		DB::table('maids')->where('maid_id',$request->id)->update([
			'maid_id' => $request->id,
			'name' => $request->name,
			'age' => $request->age,
			'salary' => $request->salary,
			'married' => $married,
			'settled' => $settled,
			'religion' => $request->religion,
			'exp_years' => $request->exp_years,
			'description' => $request->description,
			'picture' => $filename,
		]);

		// alihkan halaman ke halaman maids
		return redirect('/agent/view-maids');
	}

}
