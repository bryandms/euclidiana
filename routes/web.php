<?php

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

Route::group(['middleware' => ['web']], function () {
    
    // ----------------------------- Home Routes ------------------------------
    Route::get('/', function () {
        return view('/home');
    })->name('home');

    // ------------------------ Learning Styles Routes ------------------------
    Route::get('/styles', 'LearningStyleController@styles')
        ->name('styles');

    Route::post('/styles', 'LearningStyleController@getStyles');

    Route::get('/style', 'LearningStyleController@style')
        ->name('style');

    Route::post('/style', 'LearningStyleController@getStyle');

    // ---------------------------- Campus Routes -----------------------------
    Route::get('/campus', 'StudentController@campus')
        ->name('campus');

    Route::post('/campus', 'StudentController@getCampus');

    // ---------------------------- Gender Routes -----------------------------
    Route::get('/gender', 'StudentController@gender')
        ->name('gender');

    Route::post('/gender', 'StudentController@getGender');

    // --------------------------- Professor Routes ---------------------------
    Route::get('/professor', 'ProfessorController@professor')
        ->name('professor');

    Route::post('/professor', 'ProfessorController@getProfessor');

    // ---------------------------- Network Routes ----------------------------
    Route::get('/network', 'NetworkController@network')
        ->name('network');

    Route::post('/network', 'NetworkController@getNetwork');

    // --------------------- Internationalization Routes ----------------------
    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es'
    ]);

});