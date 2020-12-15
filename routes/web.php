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

Route::get('/admin', 'admin\Home@index');

Route::get('/admin/anggota', 'admin\Anggota@index');

// Perlengkapan
Route::get('/admin/perlengkapan/kategori', 'admin\PerlengkapanController@category');
Route::get('admin/perlengkapan/cetak/tipe', 'admin\PerlengkapanController@cetak');
Route::get('/admin/perlengkapan/tambah', 'admin\PerlengkapanController@create');
Route::get('/admin/perlengkapan', 'admin\PerlengkapanController@index');
Route::get('/admin/perlengkapan/{perlengkapan}', 'admin\PerlengkapanController@show');
Route::post('/admin/perlengkapan/', 'admin\PerlengkapanController@store');
Route::delete('/admin/perlengkapan/{perlengkapan}', 'admin\PerlengkapanController@destroy');
Route::get('admin/perlengkapan/edit/{perlengkapan}', 'admin\PerlengkapanController@edit');
Route::patch('admin/perlengkapan/{perlengkapan}', 'admin\PerlengkapanController@update');