<?php

use App\Http\Controllers\Assurance\ApporteurController;
use App\Http\Controllers\Assurance\CategorieController;
use App\Http\Controllers\Assurance\ClientController;
use App\Http\Controllers\Assurance\ContratController;
use App\Http\Controllers\Assurance\UtilisateurController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function () {

    Route::controller(Controller::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });

    // Route pour le module contrat
    Route::controller(ContratController::class)->group(function () {
        Route::get('/contrat/nouveau', 'index')->name('index.contrat');
        Route::get('/contrat/enregistrement', 'create')->name('index.create');
    });

    // Route pour le module apporteur
    Route::controller(ApporteurController::class)->group(function () {
        Route::get('/apporteur/nouveau', 'index')->name('index.apporteur');
        Route::get('/apporteur/enregistrement', 'create')->name('apporteur.add');
        Route::post('/apporteur/creer', 'store')->name('apporteur.store');
        Route::get('/apporteur/editer/{id}',  'edit')->name('apporteur.edit');
        Route::put('/apporteur/modification/{id}',  'update')->name('apporteur.update');
    });

    // Route pour le module categorie
    Route::controller(CategorieController::class)->group(function () {
        Route::get('/categorie/nouveau', 'index')->name('index.categorie');
        Route::post('/categorie/enregistrement', 'store')->name('categorie.store');
        Route::put('/categorie/modification/categorie', 'update')->name('categorie.update');
        // Route::get('/contrat/enregistrement', 'create')->name('index.create');

    });


    // Route pour le module client
    Route::controller(ClientController::class)->group(function () {
        Route::get('/client/nouveau', 'index')->name('index.client');
        Route::post('/client/creer', 'store')->name('client.store');
        Route::post('/client/recherche', 'find')->name('index.client.recherche');
        Route::put('/client/modification/client', 'update')->name('client.update');

    });

    // Route pour le module utilisateur
    Route::controller(UtilisateurController::class)->group(function () {
        Route::get('/utilisateur/nouveau', 'index')->name('index.utilisateur');
        Route::get('/utilisateur/enregistrement', 'create')->name('utilisateur.add');
        Route::post('/utilisateur/creer', 'store')->name('utilisateur.store');
        Route::get('/utilisateur/editer/{id}',  'edit')->name('utilisateur.edit');
        Route::put('/utilisateur/modification/{id}',  'update')->name('utilisateur.update');
    });
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('auth.login');
    Route::post('/connexion', 'login')->name('auth.con');
    Route::post('/deconnexion', 'logout')->name('auth.log');
});


Route::get('/logout', function () {
    return view('auth/logout');
});

Route::get('/register', function () {
    return view('auth/register');
});
