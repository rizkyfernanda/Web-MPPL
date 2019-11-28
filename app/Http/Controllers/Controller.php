<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function findHousekeeper()
	{
		$preferences = DB::table('preferences')->inRandomOrder()->get();
		$abilities = DB::table('abilities')->inRandomOrder()->get();

		return view('pages.search-form-1', ['abilities' => $abilities, 'preferences' => $preferences]);
	}

}
