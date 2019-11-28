<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/find-housekeeper', 'Controller@findHousekeeper'); //Search For Maid

Route::get('/search', 'Controller@findHousekeeper'
);

Route::get('/search/result', function () {
    return view('pages.search-result');
});

Route::get('/maid-details', function () {
    return view('pages.maid-detail');
});


//Buat Customer
Route::get('/check-identity', 'CustomerController@checkIdentity'); //Check Identity of maid
Route::get('/check-identity/search/', 'CustomerController@identitySearch'); //Search Identity of maid
Route::get('/view-maids/search', 'CustomerController@search_maids'); //Search form 
Route::get('/view-maids/result', 'CustomerController@result_maids'); //Result from search maid
Route::get('/view-maids/{maid_id}', 'CustomerController@maid_details'); //Maid details
Route::post('/view-maids/save-maid', 'CustomerController@save_maid'); //Add saved maid
Route::post('/view-maids/order-maid', 'CustomerController@order_maid'); //Add ordered maid

//Buat Agent
Route::get('/agent', 'AgentController@index')->middleware('is_agent');
Route::get('/agent/view-users', 'AgentController@view_users')->middleware('is_agent');
Route::get('/agent/view-maids', 'AgentController@view_maids')->middleware('is_agent');
Route::get('/agent/view-maids/add', 'AgentController@add')->middleware('is_agent');
ROute::get('/agent/view-maids/{maid_id}', 'AgentController@maid_details')->middleware('is_agent');
Route::post('/agent/view-maids/add/store', 'AgentController@store')->middleware('is_agent');
Route::get('/agent/view-maids/edit/{maid_id}', 'AgentController@edit')->middleware('is_agent');
Route::post('/agent/view-maids/edit/update', 'AgentController@update')->middleware('is_agent');
Route::get('/agent/view-maids/edit/{maid_id}/delete', 'AgentController@delete')->middleware('is_agent');

//Autentikasi (Login dan Register)
Auth::routes();
