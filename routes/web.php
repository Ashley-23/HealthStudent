<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

// *******************************ADMIIN******************************************
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
    
})->name('admin_dashboard');


Route::get('/admin/edt', function () {
    return view('admin.edt');
    
})->name('admin_edt');


Route::get('/admin/etudiant', function () {
    return view('admin.etudiant');
    
})->name('admin_etudiant');


Route::get('/admin/psy', function () {
    return view('admin.psy');
    
})->name('admin_psy');


Route::get('/admin/rdv', function () {
    return view('admin.rdv');
    
})->name('admin_rdv');






//--------------------------------------------------------------------------------------



// Appel du controller 
Route::resource('AllController', AllController::class);
// pour afficher la page d'accueil 
// Route::get('/accueil', 'AllController@connexion')->name('connexionCtl');
Route::post('/accueil', 'AllController@connexion')->name('connexionCtl');
// Pour gerer les accueils 
// Route::get('/accueils', 'loginController@connexion')->name('loginController');





// Route::get('/x', 'SuperAdminAffController@allclasse')->name('vue_superadmin_allclasse');







