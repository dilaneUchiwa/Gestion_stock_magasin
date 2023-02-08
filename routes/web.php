<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\EntreeController;
use App\Http\Controllers\SortieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MagasinController;
use App\Http\Controllers\FamilleController;

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
    return view('page.accueil');
})->name('accueil') ;


//Route::get('categorie',[CategorieController::class,'create']);
// Route::get('/nouveau/categorie', function () {
//     return view('Nouveau/categorie');
// })->name('nouveauutilisateur');

Route::resource('categorie', CategorieController::class);
Route::resource('produit', ProduitController::class);
Route::resource('entree', EntreeController::class);
Route::resource('sortie', SortieController::class);
Route::resource('user', UserController::class);
Route::resource('magasin', MagasinController::class);
Route::resource('famille', FamilleController::class);
Route::post('entreeadd',[EntreeController::class,'add'] )->name('add_entree_ligne');
Route::get('entreeadd/{id}',[EntreeController::class,'remove'] )->name('remove_entree_ligne');

