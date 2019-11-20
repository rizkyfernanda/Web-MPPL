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

	public function view_maids(Request $request)
	{
		$name = $request->name;
		$min_exp_years = $request->min_exp_years;
		$max_exp_years = $request->max_exp_years;
		$min_age = $request->min_age;
		$max_age = $request->max_age;
		$min_salary = $request->min_salary;
		$max_salary = $request->max_salary;
		$married = $request->married;
		$settled = $request->settled;
		$rawAbilites = $request->abilities;

		if ($name === NULL) {$name = "";}
		if ($min_exp_years === NULL) {$min_exp_years = 0;}
		if ($max_exp_years === NULL) {$max_exp_years = 99;}
		if ($min_age === NULL) {$min_age = 0;}
		if ($max_age === NULL) {$max_age = 99;}
		if ($min_salary === NULL) {$min_salary = 0;}
		if ($max_salary === NULL) {$max_salary = 9999999999;}
		if ($rawAbilites === NULL) {$abilites = "";}
		if ($married === NULL ) {
			$married = -1;
		} else if ($married == 1) {
			$married = 0;
		} else if ($married == 0){
			$married = 1;
		}
		if ($settled === NULL ) {
			$settled = -1;
		} else if ($settled == 1) {
			$settled = 0;
		} else if ($settled == 0){
			$settled = 1;
		}

		//get Maid
		$maids = DB::table('maids')
			->where('name', 'like', '%'.$name.'%')
			->where('exp_years', '>=' , $min_exp_years)
			->where('exp_years', '<=' , $max_exp_years)
			->where('age', '>=', $min_age)
			->where('age', '<=', $max_age)
			->where('salary', '>=', $min_salary)
			->where('salary', '<=', $max_salary)
			->where('married', '<>', $married)
			->where('settled', '<>', $settled)
			->pluck('maid_id');
		
		if ($rawAbilites != "") {
			$abilities = explode(',', $rawAbilites);
			if (count($abilities) > 0 || $abilities[0] != ""){
				for ($i = 0; $i < count($abilities); $i += 1) {
					$ability = trim($abilities[$i]," ");
					$maids = DB::table('abilities')
						->whereIn('maid_id', $maids)
						->where('ability','like', '%'.$ability.'%')
						->pluck('maid_id');
				}
			}
		}

		$abilities = DB::table('abilities')->whereIn('maid_id', $maids)->get();
		$maids = DB::table('maids')->whereIn('maid_id', $maids)->get();
		
		//Match abilities to maids
		foreach ($maids as $maid) {
			$maid->abilities = "";
			for ($i = 0; $i < count($abilities); $i+=1) {
				if ($maid->maid_id == $abilities[$i]->maid_id) {
					$maid->abilities .= $abilities[$i]->ability;
					if ($i < count($abilities) -1 ){
						$maid->abilities .= ", ";
					}
				}
			}
		}

		$request->name = $name;
		$request->min_exp_years = $min_exp_years;
		$request->max_exp_years = $max_exp_years;
		$request->min_age = $min_age;
		$request->max_age = $max_age;
		$request->min_salary = $min_salary;
		$request->max_salary = $max_salary;
		$request->married = $married;
		$request->settled = $settled;
		$request->abilities = $rawAbilites;
		// mengirim data maid ke view maids
		return view('agent-pages.maids',['maids' => $maids, 'request' => $request]);
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

		$abilites = explode(",", $request->abilities);

		//Insert new abilities
		if (count($abilites) > 1 || $abilites[0] != ""){	
			for ($i = 0; $i < count($abilites); $i += 1) {
				$ability = trim($abilites[$i], " ");
				DB::table('abilities')->insert([
					'maid_id' => $request->id,
					'ability' => $ability,
				]);
			}
		}

		// alihkan halaman ke halaman maids
		return redirect('/agent/view-maids');
	}



	public function edit($maid_id)
	{
		$maids = DB::table('maids')->where('maid_id',$maid_id)->get();
		$abilities = DB::table('abilities')->where('maid_id',$maid_id)->pluck('ability');
		$appendedAbilities = "";
		for ($x = 0; $x < count($abilities); $x+=1) {
			$appendedAbilities .= $abilities[$x];
			if ($x != count($abilities) - 1){
				$appendedAbilities .= ", ";
			}	
		}
		return view('agent-pages.edit-maid', ['maids' => $maids, 'abilities' => $appendedAbilities]);
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

		$abilites = explode(",", $request->abilities);

		//Insert new abilities
		if (count($abilites) > 1 || $abilites[0] != ""){	
			for ($i = 0; $i < count($abilites); $i += 1) {
				$ability = trim($abilites[$i], " ");
				DB::table('abilities')->insertOrIgnore([
					'maid_id' => $request->id,
					'ability' => $ability,
				]);
			}
		}

		// alihkan halaman ke halaman maids
		return redirect('/agent/view-maids');
	}

}
