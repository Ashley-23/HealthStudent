<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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







// Route::get('/x', 'SuperAdminAffController@allclasse')->name('vue_superadmin_allclasse');







