<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class ControllerPegawai extends Controller
{
	public function index()
	{
		// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();
 
    	// mengirim data pegawai ke view index
    	return view('pegawai',['pegawai' => $pegawai]);
	}

	// Untuk View 1 pegawai
	public function view($id)
	{
		$viewPegawai = DB::table('pegawai') -> where('id',$id)->get();
		return view('pegawaiview',['pegawai' => $viewPegawai]);
	}


	// Tambah pegawai -----------------------------------------------------------
	public function formulir()
	{
		return view('formulir');
	}

	public function proses(Request $request)
	{	
		// Submit data pegawai
		DB::table('pegawai')->insert([
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'umur' => $request->umur,
			'alamat' => $request->alamat
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('pegawai');
	}


	// Edit Pegawai -----------------------------------------------------------
	public function edit($id)
	{
		$editPegawai = DB::table('pegawai') -> where('id',$id)->get();
		return view('editPegawai',['pegawai' => $editPegawai]);
	}


	public function update(Request $request)
	{
		// update data pegawai
		DB::table('pegawai')->where('id',$request->id)->update([
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'umur' => $request->umur,
			'alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');

	}


	// Hapus Pegawai -----------------------------------------------------------
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pegawai')->where('id',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

}