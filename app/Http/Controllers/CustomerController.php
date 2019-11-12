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
}
