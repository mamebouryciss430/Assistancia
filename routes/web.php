<?php

use App\Http\Controllers\DemandeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('demande',DemandeController::class);

Route::controller(DemandeController::class)->group(function(){

    Route::get('/demandeUser','demandeUser')->name('demandeUser');
    Route::get('/demandeAdmin','demandeAdmin')->name('demandeAdmin');
    Route::get('/refus/{demande}','rejet')->name('refus');
    Route::post('/rejet/{demande}','demandeRejetee')->name('demandeRejetee');
    Route::post('/traite/{demande}','demandeTraitee')->name('demandeTraitee');
    Route::post('/update/{id}','Responsabiliser_user')->name('Responsabiliser_user');
    Route::get('/voir_admin','voir_admin');
    Route::get('/gestionA','gestionA')->name('gestionA');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
