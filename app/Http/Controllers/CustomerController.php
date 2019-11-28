<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class CustomerController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function get_home_data() {
		
		$user_id = Auth::user()->id;

		$promos = DB::table('promos')
			->orderBy('timestamp', 'desc')
			->limit(3)
			->get();

		$saved_maid = DB::table('saved_maid')
			->join('maids', 'maids.maid_id', '=', 'saved_maid.maid_id')
			->where('user_id', $user_id)
			->orderBy('timestamp', 'desc')
			->limit(3)
			->get();

		$ordered_maid = DB::table('ordered_maid')
			->join('maids', 'maids.maid_id', '=', 'ordered_maid.maid_id')
			->where('user_id', $user_id)
			->orderBy('timestamp', 'desc')
			->limit(3)
			->get();

		$recently_viewed = DB::table('recently_viewed')
			->join('maids', 'maids.maid_id', '=', 'recently_viewed.maid_id')
			->where('user_id', $user_id)
			->orderBy('timestamp', 'desc')
			->limit(3)
			->get();

		return view('pages.index', ['promos' => $promos, 'saved_maid' => $saved_maid, 'ordered_maid' => $ordered_maid, 'recently_viewed' => $recently_viewed]);
	}

	public function checkIdentity()
	{
		return view('pages.checkIdentity');
	}

	public function identitySearch(Request $request)
	{
		$search = $request->search;
		$maids = DB::table('maids')->where('maid_id',$search)->get();
		return view('pages.searchIdentity', ['maids' => $maids]);
	}

	public function maid_details($maid_id)
	{
		$user_id = Auth::user()->id;
		
		$maid =  DB::table('maids')
			->where('maid_id', $maid_id)
			->get()[0];

		$abilities = DB::table('abilities')
			->where('maid_id', $maid_id)
			->get();

		$preferences = DB::table('preferences')
			->where('maid_id', $maid_id)
			->get();

		$careers = DB::table('careers')
			->where('maid_id', $maid_id)
			->get();

		$is_saved = DB::table('saved_maid')
			->where('user_id', $user_id)
			->where('maid_id', $maid_id)
			->exists();

		$is_ordered = DB::table('ordered_maid')
			->where('maid_id', $maid_id)
			->exists();

		$is_viewed = DB::table('recently_viewed')
			->where('user_id', $user_id)
			->where('maid_id', $maid_id)
			->exists();

		if ($is_viewed) {
			DB::table('recently_viewed')
				->where('user_id', $user_id)
				->where('maid_id', $maid_id)	
				->update([
				'timestamp' => date('Y-m-d H:i:s')
			]);
		} else {
			DB::table('recently_viewed')->insert([
				'user_id' => $user_id,
				'maid_id' => $maid_id
			]);
		}

		$married = array(
			0 => "Not Married",
			1 => "Married"
		);

		$settled = array(
			0 => "Do Not Settle",
			1 => "Settle"
		); 

		return view('pages.maid-detail',
		['maid' => $maid, 
		'is_saved' => $is_saved, 
		'is_ordered' => $is_ordered, 
		'abilities' => $abilities, 
		'preferences' => $preferences, 
		'careers' => $careers,
		'settled' => $settled,
		'married' => $married
		]);
	}

	public function search_maids(Request $request) {
		$age = $request->age;
		$salary = $request->salary;
		$married = $request->married;
		$settled = $request->settled;
		$religion = $request->religion;
		$exp = $request->exp;

		if ($age == 'all') {
			$min_age = 0;
			$max_age = 999;
		} else if ($age == 'young') {
			$min_age = 0;
			$max_age = 17;
		} else if ($age == 'adult') {
			$min_age = 18;
			$max_age = 40;
		} else {
			$min_age = 41;
			$max_age = 999;
		}

		if ($salary == 'low') {
			$min_salary = 0;
			$max_salary = 1000000;
		} else if ($salary == 'medium') {
			$min_salary = 1000000;
			$max_salary = 3000000;
		} else if ($salary == 'high') {
			$min_salary = 3000000;
			$max_salary = 9999999999999;
		} else {
			$min_salary = 0;
			$max_salary = 9999999999999;
		}

		//Value is intentionally reversed
		if ($married == 'yes') {
			$married = 0;
		} else if ($married == 'no') {
			$married = 1;
		} else {
			$married = -1;
		}

		//Value is intentionally reversed
		if ($settled == 'yes') {
			$settled = 0;
		} else if ($settled == 'no') {
			$settled = 1;
		} else {
			$settled = -1;
		}

		if ($exp == 'newbie') {
			$min_exp = 0;
			$max_exp = 1;
		} else if ($exp == 'mediocre') {
			$min_exp = 1;
			$max_exp = 3;
		} else if ($exp == 'expert') {
			$min_exp = 3;
			$max_exp = 9999;
		}	else {
			$min_exp = 0;
			$max_exp = 9999;
		}

		$maids = DB::table('maids')
			->where('LCASE(religion)', 'like', '%'.strtolower($religion).'%')
			->where('exp_years', '>=' , $min_exp)
			->where('exp_years', '<=' , $max_exp)
			->where('age', '>=', $min_age)
			->where('age', '<=', $max_age)
			->where('salary', '>=', $min_salary)
			->where('salary', '<=', $max_salary)
			->where('married', '<>', $married)
			->where('settled', '<>', $settled)
			->pluck('maid_id');
			
	}

	public function save_maid(Request $request)
	{
		$maid_id = $request->maid_id;
		$user_id = $request->user_id;
		// $user_id = Auth::user()->id;

		$is_not_saved = DB::table('saved_maid')
			->where('user_id', $user_id)
			->where('maid_id'. $maid_id)
			->doesntExists();
		
		if ($is_not_saved) {
			DB::table('saved_maid')->insert([
				'user_id' => $user_id,
				'maid_id' => $maid_id
			]);
		}
	}

	public function order_maid(Request $request)
	{
		$maid_id = $request->maid_id;
		$user_id = $request->user_id;
		// $user_id = Auth::user()->id;

		$is_not_ordered = DB::table('ordered_maid')
			->where('maid_id'. $maid_id)
			->doenstExists();
				
		if ($is_not_ordered) {
			DB::table('ordered_maid')->insert([
				'user_id' => $user_id,
				'maid_id' => $maid_id
			]);
		}
	}
}
