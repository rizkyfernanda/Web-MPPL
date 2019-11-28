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

	public function maid_details($maid_id)
	{
		$maid = DB::table('maids')
			->join('abilities', 'abilities.maid_id', '=', $maid_id)
			->join('preferences', 'preferences.maid_id', '=', $maid_id)
			->join('studies', 'studies.maid_id', '=', $maid_id)
			->get();
	
		return views('agent-page.detail-maids',['maid' => $maid]);
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
		$rawAbilities = $request->abilities;
		$rawPreferences = $request->preferences;

		if ($name === NULL) {$name = "";}
		if ($min_exp_years === NULL) {$min_exp_years = 0;}
		if ($max_exp_years === NULL) {$max_exp_years = 99;}
		if ($min_age === NULL) {$min_age = 0;}
		if ($max_age === NULL) {$max_age = 99;}
		if ($min_salary === NULL) {$min_salary = 0;}
		if ($max_salary === NULL) {$max_salary = 9999999999;}
		if ($rawAbilities === NULL) {$abilities = "";}
		if ($rawPreferences === NULL) {$preferences = "";}
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
			
			// DB::table('reven')->insert([
			// 	'user_id' => '1',
			// 	'maid_id' => $maid_id 
			// ]);	
		
		if ($rawAbilities != "") {
			$abilities = explode(',', $rawAbilities);
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

		if ($rawPreferences != "") {
			$preferences = explode(',', $rawPreferences);
			if (count($preferences) > 0 || $preferences[0] != ""){
				for ($i = 0; $i < count($preferences); $i += 1) {
					$preference = trim($preferences[$i]," ");
					$maids = DB::table('preferences')
						->whereIn('maid_id', $maids)
						->where('preference','like', '%'.$preference.'%')
						->pluck('maid_id');
				}
			}
		}

		$abilities = DB::table('abilities')->whereIn('maid_id', $maids)->get();
		$preferences = DB::table('preferences')->whereIn('maid_id', $maids)->get();
		$maids = DB::table('maids')->whereIn('maid_id', $maids)->get();
		
		//Count abilities per maid_id
		$countAblPerMaidId = [];
		foreach ($abilities as $object) {
			if (isset($object->maid_id)) {
				$maid_id = $object->maid_id;
				if (!isset($countAblPerMaidId[$maid_id])) {
					$countAblPerMaidId[$maid_id] = 0;
				}
				$countAblPerMaidId[$maid_id]++;
			}
		}

		//Match abilities to maids
		foreach ($maids as $maid) {
			$maid->abilities = "";
			$i = 0;
			while ($i < count($abilities)) {
				$j = 0;
				while ($i < count($abilities) && $maid->maid_id == $abilities[$i]->maid_id) {
					$maid->abilities .= $abilities[$i]->ability;
					if ($j < $countAblPerMaidId[$maid->maid_id] -1 ){
						$maid->abilities .= ", ";
					}
					$j += 1;
					$i += 1;
				}
				$i += 1;
			}
		}

		//Count preferences per maid_id
		$countPrefPerMaidId = [];
		foreach ($preferences as $object) {
			if (isset($object->maid_id)) {
				$maid_id = $object->maid_id;
				if (!isset($countPrefPerMaidId[$maid_id])) {
					$countPrefPerMaidId[$maid_id] = 0;
				}
				$countPrefPerMaidId[$maid_id]++;
			}
		}

		//Match preferences to maids
		foreach ($maids as $maid) {
			$maid->preferences = "";
			$i = 0;
			while ($i < count($preferences)) {
				$j = 0;
				while ($i < count($preferences) && $maid->maid_id == $preferences[$i]->maid_id) {
					$maid->preferences .= $preferences[$i]->preference;
					if ($j < $countPrefPerMaidId[$maid->maid_id] -1 ){
						$maid->preferences .= ", ";
					}
					$j += 1;
					$i += 1;
				}
				$i += 1;
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
		$request->abilities = $rawAbilities;
		$request->preferences = $rawPreferences;
		// mengirim data maid ke view maids
		return view('agent-pages.maids',['maids' => $maids, 'request' => $request, 'preferences' => $preferences, 'abilities' => $abilities]);
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

		$abilities = explode(",", $request->abilities);

		//Insert new abilities
		if (count($abilities) > 1 || $abilities[0] != ""){	
			for ($i = 0; $i < count($abilities); $i += 1) {
				$ability = trim($abilities[$i], " ");
				DB::table('abilities')->insertOrIgnore([
					'maid_id' => $request->id,
					'ability' => $ability,
				]);
			}
		}

		$preferences = explode(",", $request->preferences);
		
		//Insert new preferences
		if (count($preferences) > 1 || $preferences[0] != ""){	
			for ($i = 0; $i < count($preferences); $i += 1) {
				$preference = trim($preferences[$i], " ");
				DB::table('preferences')->insertOrIgnore([
					'maid_id' => $request->id,
					'preference' => $preference,
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
		$preferences = DB::table('preferences')->where('maid_id', $maid_id)->pluck('preference');

		$appendedAbilities = "";
		for ($x = 0; $x < count($abilities); $x+=1) {
			$appendedAbilities .= $abilities[$x];
			if ($x != count($abilities) - 1){
				$appendedAbilities .= ", ";
			}	
		}

		$appendedPreferences = "";
		for ($x = 0; $x < count($preferences); $x+=1) {
			$appendedPreferences .= $preferences[$x];
			if ($x != count($preferences) - 1){
				$appendedPreferences .= ", ";
			}	
		}

		return view('agent-pages.edit-maid', ['maids' => $maids, 'abilities' => $appendedAbilities, 'preferences' => $appendedPreferences]);
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

		$abilities = explode(",", $request->abilities);

		//Insert new abilities
		if (count($abilities) > 1 || $abilities[0] != ""){	
			for ($i = 0; $i < count($abilities); $i += 1) {
				$ability = trim($abilities[$i], " ");
				DB::table('abilities')->insertOrIgnore([
					'maid_id' => $request->id,
					'ability' => $ability,
				]);
			}
		}

		$preferences = explode(",", $request->preferences);
		
		//Insert new preferences
		if (count($preferences) > 1 || $preferences[0] != ""){	
			for ($i = 0; $i < count($preferences); $i += 1) {
				$preference = trim($preferences[$i], " ");
				DB::table('preferences')->insertOrIgnore([
					'maid_id' => $request->id,
					'preference' => $preference,
				]);
			}
		}

		// alihkan halaman ke halaman maids
		return redirect('/agent/view-maids');
	}

}
