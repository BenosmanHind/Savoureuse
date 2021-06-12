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
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardCuisinierController;

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



Route::get('/home-dashboard-cuisinier', function () {
    return view('home-dashboard-cuisinier');
});


Route::resource('cuisiniers', CuisinierController::class);
Route::resource('admins', AdminController::class);

Route::get('/IsAccept', function()
{
    return view('IsAccept');
});
Route::get('/IsActive', function()
{
    return view('IsActive');
});
Route::get('/IsRegister', function()
{
    return view('IsRegister');
});

Route::get('/recettes', function()
{
    return view('les_recettes');
});

Route::resource('profil-admin', ProfilController::class);
Route::resource('profil-cuisinier', ProfilController::class);


Route::resource('/',AccueilController::class);
Route::resource('addrecette', RecetteController::class);
Route::resource('categorie', CategorieController::class);
Route::resource('produit', ProduitController::class);
Route::resource('comments', CommentController::class);
Route::resource('/recettedetail', RecetteController::class);

Route::get('/get-products', [App\Http\Controllers\ProduitController::class, 'getProducts']);

Route::get('/cuisinierdetail/{id}', [App\Http\Controllers\CuisinierController::class, 'detail']);
Route::get('/recettes_cuisinier', [App\Http\Controllers\RecetteController::class, 'list_recette']);
Route::get('/recettes_admin', [App\Http\Controllers\RecetteController::class, 'list_recette_admin']);

Route::get('/cuisiniers/validate/{id}', [App\Http\Controllers\ValidateController::class, 'accept']);
Route::get('/cuisiniers/activer/{id}', [App\Http\Controllers\ValidateController::class, 'activer']);
Route::get('/cuisiniers/desactiver/{id}', [App\Http\Controllers\ValidateController::class, 'desactiver']);
Route::get('/recette_admin/accept/{id}', [App\Http\Controllers\AcceptController::class, 'accept']);
Route::get('/recettes_admin/{id}', [App\Http\Controllers\RecetteController::class, 'destroy']);
Route::get('/recettes_cuisinier/{id}', [App\Http\Controllers\RecetteController::class, 'destroy_recette']);
Route::get('/recette/{id}', [App\Http\Controllers\RecetteController::class, 'recettedetail']);
Route::get('/categorie_recette/{id}', [App\Http\Controllers\AccueilController::class, 'recettes_categorie'])->name('voir_recette');
//Route::get('/recettedetail/{id}', [App\Http\Controllers\RecetteController::class, 'recettepage']);
Route::get('/search',[App\Http\Controllers\CuisinierController::class, 'search']);
Route::get('/search-recipe',[App\Http\Controllers\RecetteController::class, 'search']);
Route::resource('/home-dashboard-admin', DashboardAdminController::class); 
Route::resource('/home-dashboard-cuisinier', DashboardCuisinierController::class); 
Route::get('/add_admin', function()
{
    return view('add_admin');
});

Route::get('/LesRecettes',[App\Http\Controllers\RecetteController::class, 'LesRecettes']);