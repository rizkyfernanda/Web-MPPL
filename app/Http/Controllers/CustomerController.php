<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function get_home_data() {
		$user_id = Auth::user()->id;

		$promos = DB::table('promos')
			->limit(3)
			->get();

		$saved_maid = DB::table('saved_maid')
			->where('user_id', $user_id)
			->orderBy('timestamp')
			->limit(3)
			->pluck('maid_id');

		$ordered_maid = DB::table('ordered_maid')
			->where('user_id', $user_id)
			->orderBy('timestamp')
			->limit(3)
			->pluck('maid_id');

		$saved_maid = DB::table('maids')
			->whereIn('maid_id', $saved_maid)
			->get();

		$ordered_maid = DB::table('maids')
			->whereIn('maid_id', $ordered_maid)
			->get();

		return view('pages.index', ['promos' => $promos, 'saved_maid' => $saved_maid, 'ordered_maid' => $ordered_maid]);
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
							->join('abilities', 'abilities.maid_id', '=', $maid_id)
							->join('preferences', 'preferences.maid_id', '=', $maid_id)
							->join('studies', 'studies.maid_id', '=', $maid_id)
							->get();

		$is_saved = DB::table('saved_maid')
								->where('user_id', $user_id)
								->where('maid_id'. $maid_id)
								->exists();

		$is_ordered = DB::table('ordered_maid')
								->where('maid_id'. $maid_id)
								->exists();

		DB::table('recently_viewed')->insert([
			'user_id' => $user_id,
			'maid_id' => $maid_id
		]);

		return views('page.maid-details',['maid' => $maid, 'is_saved' => $is_saved, 'is-ordered' => $is_ordered]);
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
