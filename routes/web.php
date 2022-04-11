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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register','AuthController@getRegister')->name('register');
Route::post('/post-register', 'AuthController@postRegister')->name('register.post');

Route::group(['prefix' => 'deposit'], function () {
    Route::get('/index', 'DepositController@index')->name('deposit');
    Route::get('/create', 'DepositController@create')->name('deposit.create');
    Route::post('/tambah-data', 'DepositController@store')->name('deposit.store');
    Route::get('/edit/{id}', 'DepositController@edit')->name('deposit.edit');
    Route::get('/delete/{id}', 'DepositController@destroy')->name('deposit.delete');
    Route::patch('/update/{id}', 'DepositController@update')->name('deposit.update');
    Route::get('/tambah-saldo/{id}', 'Saldo\TambahSaldoController@create')->name('tambahsaldo');
    Route::get('/kurang-saldo/{id}', 'Saldo\KurangSaldoController@create')->name('kurang-saldo');
    Route::patch('/tammbahsaldo/{id}', 'Saldo\TambahSaldoController@update')->name('saldo.update');
    Route::patch('/kurangsaldo/{id}', 'Saldo\KurangSaldoController@update')->name('kurang-saldo.update');
});

Route::group(['prefix' => 'profile'], function () {
    Route::get('/myprofile', 'ProfileController@index')->name('profile.index');
    Route::get('/profile-edit', 'ProfileController@edit')->name('profile.edit');
    Route::patch('/update', 'ProfileController@update')->name('profile.update');
    Route::delete('/delete', 'ProfileController@destroy')->name('profile.delete');
    
});

Route::group(['prefix' => 'masterbarang'], function () {
    Route::get('/index', 'MasterBarang\MasterBarangController@index')->name('master-barang');
    Route::get('/formulir-barang', 'MasterBarang\MasterBarangController@create')->name('master-barang.formulir-barang');
    Route::get('laporan-barang', 'Laporan\BarangController@index')->name('laporan.periode.barang');
    Route::get('suplier-barang', 'Laporan\SuplierController@index')->name('laporan.periode.suplier');
    Route::get('/edit/{barang}', 'MasterBarang\MasterBarangController@edit')->name('master-barang.edit');
    Route::post('/index', 'MasterBarang\MasterBarangController@store')->name('master-barang.store');
    Route::get('/show/{barang}', 'MasterBarang\MasterBarangController@show')->name('master-barang.show');
    Route::patch('/update/{barang}', 'MasterBarang\MasterBarangController@update')->name('master-barang.update');
    Route::delete('/delete/{barang}', 'MasterBarang\MasterBarangController@destroy')->name('master-barang.delete');
});

Route::group(['prefix' => 'transaksi'], function () {
    Route::get('/index', 'Transaksi\TransaksiController@index')->name('transaksi');
    Route::get('/barang-masuk', 'Transaksi\BarangMasukController@create')->name('transaksi.barang-masuk');
    Route::get('/barang-keluar', 'Transaksi\BarangKeluarController@create')->name('transaksi.barang-keluar');
    Route::post('/store', 'Transaksi\BarangKeluarController@store')->name('transaksi.store');
    Route::post('/index', 'Transaksi\BarangMasukController@store')->name('transaksi.barangmasuk');
    Route::delete('/delete', 'Transaksi\TransaksiController@destroy')->name('transaksi.delete');
});

Route::group(['prefix' => 'suplier'], function () {
    Route::get('index', 'Suplier\SuplierController@index')->name('suplier');
    Route::get('create', 'Suplier\SuplierController@create')->name('suplier.create');
    Route::get('edit/{suplier}', 'Suplier\SuplierController@edit')->name('suplier.edit');
    Route::patch('update/{suplier}', 'Suplier\SuplierController@update')->name('suplier.update');
    Route::post('store', 'Suplier\SuplierController@store')->name('suplier.store');
    Route::delete('delete/{suplier}', 'Suplier\SuplierController@destroy')->name('suplier.delete');
});
