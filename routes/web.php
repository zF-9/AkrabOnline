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
use App\User;
use App\akrab_membrs;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/datatable', function () {
    return view('datatable');
});

Route::get('/permohonan', 'AkrabMembrController@apply_akrab');
Route::post('/permohonan', 'AkrabMembrController@store');
//Route::get('/table-data','HomeController@show_users'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
