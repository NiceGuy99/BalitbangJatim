<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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
Route::get('Web', 'BerandaController@home' );
Route::get('Sakip', 'SakipController@index' );
Route::get('Profil', 'ProfilController@index' );
Route::get('Berita', 'BeritaController@index' );
Route::get('Galeri', 'GaleriController@index' );
Route::get('Produk', 'ProdukController@index' );
Route::get('Backend/Datauser', 'DatauserController@index' );
Route::get('Backend/Dashboard', 'DashboardController@index' );
Route::get('Backend/Create', 'CreateController@index' );

Route::get('login', 'HomeController@index')->middleware('admin');

Auth::routes();


// Route::get('Backend/Datauser', 'DatauserController@show');
// Route::get('Backend/Datauser/{id}', 'DatauserController@show')->name('Backend/Dashboard');


// Route::get('login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
