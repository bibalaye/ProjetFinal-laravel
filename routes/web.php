<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\achatsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\produitsController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('auth.register1');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['App\Http\Middleware\verificationadmin'])->group(function () {
/*                                                                        |
|-------------------------------------------------------------------------|-
| PARTIE BACK OFFICE RESERVER AUX ADMINISTRATEUR DU SITE                  |
|-------------------------------------------------------------------------|-
|                                                                         |
*/
    
    
/*
|--------------------------------------------------------------------------
| PRODUIT Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/produit', [produitsController::class, 'ListProduits'])->name('admin');
Route::get('/modifier/{id}', [produitsController::class, 'modifierProduit']);
Route::get('/supprimer/{id}', [produitsController::class, 'supprimerProduit']);
Route::post('/update', [produitsController::class, 'updateProduit']);
Route::get('/ajouter', [produitsController::class, 'ajouterProduit']);
Route::post('/add', [produitsController::class, 'addProduit']);
/*
|--------------------------------------------------------------------------
| CATEGORIE Routes
|--------------------------------------------------------------------------
|*/


Route::get('/Categorie', [categoriesController::class, 'ListCategorie']);
Route::get('/modifierCat/{id}', [categoriesController::class, 'modifierCategorie']);
Route::get('/supprimerCat/{id}', [categoriesController::class, 'supprimerCategorie']);
Route::post('/updateCategorie', [categoriesController::class, 'updateCategorie']);
Route::get('/ajouterCat', [categoriesController::class, 'ajouterCategorie']);
Route::post('/addCategorie', [categoriesController::class, 'addCategorie']);

/*
|--------------------------------------------------------------------------
| ACHAT Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/achat', [achatsController::class, 'Listachat']);
//Route::post('/addachat',[achatsController::class,'addachat']);
/*
|--------------------------------------------------------------------------
| Utilisateur Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/user', [userController::class, 'Listuser']);
Route::get('/modifier_role/{id}', [userController::class, 'modifierrole']);
Route::post('/update_role', [userController::class, 'updaterole']);
Route::get('/supprimer_user/{id}', [userController::class, 'supprimer_user']);
});

/*                                                                        |
|-------------------------------------------------------------------------|-
| PARTIE Front OFFICE RESERVER AUX CLIENTS DU SITE                         |
|-------------------------------------------------------------------------|-
|                                                                         |
*/
    
Route::get('/', [produitsController::class, 'index'])->name('accueil');
Route::get('/detail/{id}', [produitsController::class, 'detailProduit']);
Route::get('/liste/{id}', [produitsController::class, 'articlebycategorie'])->name('listeProduitparcategorie');
Route::get('/ajouterachat/{id}', [achatsController::class, 'ajouterachat']);
Route::get('/recherche', [produitsController::class, 'rechercheproduits']);
Route::get('/recherche_liste', [produitsController::class, 'rechercheproduits_liste']);





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
