<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuisinierController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\AcceptController;




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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home-dashboard-admin', function () {
    return view('home-dashboard-admin');
});

Route::get('/home-dashboard-cuisinier', function () {
    return view('home-dashboard-cuisinier');
});

Route::get('/admins', function () {
    return view('Admins');
});

Route::resource('cuisiniers', CuisinierController::class);
Route::resource('admins', AdminController::class);

Route::get('/IsAccept', function()
{
    return view('IsAccept');
});
Route::get('/IsRegister', function()
{
    return view('IsRegister');
});

Route::get('/recette', function()
{
    return view('recettepage');
});
Route::get('/recettes', function()
{
    return view('les_recettes');
});

Route::get('/profil-admin', function()
{
    return view('profil-admin');
});
Route::get('/profil-cuisinier', function()
{
    return view('profil-cuisinier');
});


Route::resource('addrecette', RecetteController::class);
Route::resource('categorie', CategorieController::class);
Route::resource('produit', ProduitController::class);

Route::get('/cuisinierdetail/{id}', [App\Http\Controllers\CuisinierController::class, 'detail']);
Route::get('/mes_recettes', [App\Http\Controllers\RecetteController::class, 'list_recette']);
Route::get('/recettes_admin', [App\Http\Controllers\RecetteController::class, 'list_recette_admin']);

Route::get('/cuisiniers/validate/{id}', [App\Http\Controllers\ValidateController::class, 'accept']);
Route::get('/recette_admin/accept/{id}', [App\Http\Controllers\AcceptController::class, 'accept']);




