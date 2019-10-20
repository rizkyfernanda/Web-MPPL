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
    return view('index');
});

Route::get('dosen','ControllerDosen@index');



//CRUD Pegawai -------------------------------------------------------
Route::get('pegawai','ControllerPegawai@index');

//View Pegawai
Route::get('pegawai/view/id={id}','ControllerPegawai@view');

//Tambah pegawai
Route::get('pegawai/formulir','ControllerPegawai@formulir');
Route::post('pegawai/formulir/proses', 'ControllerPegawai@proses');

//Edit pegawai
Route::get('pegawai/edit/id={id}', 'ControllerPegawai@edit');
Route::post('pegawai/update', 'ControllerPegawai@update');

//Hapus pegawai
Route::get('pegawai/hapus/id={id}', 'ControllerPegawai@hapus');
