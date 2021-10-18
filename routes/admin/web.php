<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

//seleksi crud
Route::get('/admins', 'HomeController@crud')->name('cruds');

Route::post('/admins', 'HomeController@store')->name('admin_kirim');
Route::get('/preview', 'HomeController@preview')->name('preview_soal');

Route::get('/admin', 'HomeController@create')->name('admin');

Route::get('/deletes', 'HomeController@destroy')->name('hapus_semua');
Route::get('/subjects/delete/{id_soal}', 'HomeController@destroys')->name('soal.delete');

Route::get('edit/{id_soal}', 'HomeController@edit')->name('edit');

//test below Here
Route::get('/foo', function () {
    return view('crud.adminz');
})->name('foo');

Route::get('fooo', function(){
  return view('akademik');
})->name('akademik');


// Route::post('/files', function(Request $request){
//   $request->image->store('images');
//   return "berhasil";
// });
