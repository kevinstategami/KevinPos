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
    return view('welcome');
});

Route::get('/images/{filename}', function ($filename)
{
	$path = storage_path('gambar') . '/' . $filename;
	$file = File::get($path);
	$type = File::mimeType($path);
	$response = Response::make($file);
	$response->header("Content-Type", $type);
	return $response;
});

Route::prefix('dashboard')->group(function(){

	Route::get('/', function () {
    return view('admin.layouts.header');
	});

	Route::prefix('karyawan')->group(function(){
		Route::get('', 'KaryawanController@index');
		Route::get('create', 'KaryawanController@create');
		Route::get('edit/{id}', 'KaryawanController@edit');
		Route::get('delete/{id}', 'KaryawanController@destroy');
		Route::post('post', 'KaryawanController@store');
		Route::post('update', 'KaryawanController@update');
	});	

	Route::prefix('profile')->group(function(){
		Route::get('', 'ProfileController@show');		
		Route::post('update', 'ProfileController@update');
	});

	Route::prefix('transaksi')->group(function(){
		Route::get('', 'TransaksiController@index');
		Route::get('create', 'TransaksiController@create');
		Route::get('edit/{id}', 'TransaksiController@edit');
		Route::get('delete/{id}', 'TransaksiController@destroy');
		Route::post('post', 'TransaksiController@store');
		Route::post('update', 'TransaksiController@update');
	});

	Route::prefix('pos')->group(function(){
		Route::get('', 'PosController@index');
		Route::get('create', 'PosController@create');
		Route::get('destroyall', 'PosController@destroyall');
		Route::get('edit/{id}', 'PosController@edit');
		Route::get('delete/{id}', 'PosController@destroy');
		Route::post('post', 'PosController@store');
		Route::post('update', 'PosController@update');
		Route::get('pdfall', 'PosController@pdfall');
		Route::get('pdf/{id}', 'PosController@pdf');
	});

	Route::prefix('barang_masuk')->group(function(){
		Route::get('', 'BarangMasukController@index');		
		Route::get('delete/{id}', 'BarangMasukController@destroy');
		Route::get('destroyall', 'BarangMasukController@destroyall');
		Route::get('pdfall', 'BarangMasukController@pdfall');
		Route::get('pdf/{id}', 'BarangMasukController@pdf');
	});	

	Route::prefix('barang_keluar')->group(function(){
		Route::get('', 'BarangKeluarController@index');		
		Route::get('delete/{id}', 'BarangKeluarController@destroy');
		Route::get('destroyall', 'BarangKeluarController@destroyall');
		Route::get('pdfall', 'BarangKeluarController@pdfall');
		Route::get('pdf/{id}', 'BarangKeluarController@pdf');
	});	

	Route::prefix('products')->group(function(){
		Route::get('', 'ProductsController@index');
		Route::get('create', 'ProductsController@create');
		Route::get('edit/{id}', 'ProductsController@edit');
		Route::get('delete/{id}', 'ProductsController@destroy');
		Route::post('post', 'ProductsController@store');
		Route::post('update', 'ProductsController@update');
	});

	Route::prefix('kategori')->group(function(){
		Route::get('', 'KategoriController@index');
		Route::get('create', 'KategoriController@create');
		Route::get('edit/{id}', 'KategoriController@edit');
		Route::get('delete/{id}', 'KategoriController@destroy');
		Route::post('post', 'KategoriController@store');
		Route::post('update', 'KategoriController@update');
		Route::get('pdfall', 'KategoriController@pdfall');
		Route::get('pdf/{id}', 'KategoriController@pdf');
	});	

	Route::prefix('disc')->group(function(){
		Route::get('', 'DiscController@index');
		Route::get('create', 'DiscController@create');
		Route::get('edit/{id}', 'DiscController@edit');
		Route::get('delete/{id}', 'DiscController@destroy');
		Route::post('post', 'DiscController@store');
		Route::post('update', 'DiscController@update');
	});	

	Route::prefix('curr')->group(function(){
		Route::get('', 'CurrController@index');
		Route::get('create', 'CurrController@create');
		Route::get('edit/{id}', 'CurrController@edit');
		Route::get('delete/{id}', 'CurrController@destroy');
		Route::post('post', 'CurrController@store');
		Route::post('update', 'CurrController@update');
	});	

	Route::prefix('unit')->group(function(){
		Route::get('', 'UnitController@index');
		Route::get('create', 'UnitController@create');
		Route::get('edit/{id}', 'UnitController@edit');
		Route::get('delete/{id}', 'UnitController@destroy');
		Route::post('post', 'UnitController@store');
		Route::post('update', 'UnitController@update');
	});	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
