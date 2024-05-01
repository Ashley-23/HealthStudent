<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\PsychologueController;

// use App\Http\Controllers\{AllController,EtudiantController};

Route::get('', fn () => to_route('login'));

Route::middleware('auth:admins,etudiants,psychos')->group(function () {
    Route::middleware('auth:admins')->prefix('admin')->name('admin.')->group(function () {
        Route::view('dashboard', 'admin.dashboard')->name('dashboard');
        Route::view('etudiant', 'admin.etudiant')->name('etudiant');
        Route::view('psy', 'admin.psy')->name('psy');

        Route::controller(EtudiantController::class)->prefix('etudiants')->name('etudiants.')->group(function () {
            Route::get('liste', 'index')->name('index');
            Route::get('ajouter', 'create')->name('create');
            Route::post('enregistrer', 'store')->name('store');
        });

        Route::controller(PsychologueController::class)->prefix('psychologues')->name('psychologues.')->group(function () {
            Route::get('liste', 'index')->name('index'); //liste des psy
            Route::get('ajouter', 'create')->name('create'); // afficher le formulaire de création
            Route::post('enregistrer', 'store')->name('store'); //créer le psy
            Route::post('editer/{id}', 'edit')->name('edit'); // affiche un psy
            Route::post('modifier/{id}', 'update')->name('update'); //modifie les infos d'un psy
            Route::post('supprimer/{id}', 'destroy')->name('destroy'); //supprime un psy
        });
    });

    

    Route::view('etudiant/dashboard', 'etudiant.dashboard')->name('etudiant_dashboard');


    Route::middleware('auth:etudiants')->prefix('etudiant')->name('etudiant.')->group(function () {
        
        Route::view('etudiant/rdv', 'admin.rdv')->name('etudiant.rdv');
    });


    Route::view('psychologue/dashboard', 'psychologue.default')->name('psychologue_dashboard');
    Route::middleware('auth:psychos')->prefix('psychologue')->name('psychologue.')->group(function () {
      
    });


    // Route::view('admin/edt', 'admin.edt')->name('admin_edt');

    Route::controller(AllController::class)->group(function () {
        Route::post('connexion', 'connexion')->name('connexionCtl');
    });


    // Route::resource('EtudiantController', EtudiantController::class);
    // Route::post('/admin/etudiant/ajout', 'EtudiantController@create')->name('ajout_etudiant');



    // Route::controller(EtudiantController::class)->group(function () {
    //     Route::post('/admin/ajout/etudiant', 'EtudiantController@create')->name('ajout_etudiant');
    // });




    //----------------------------------ETUDIANTS------------------------------------------
    // Route::post('');

});

require __DIR__ . '/auth.php';
