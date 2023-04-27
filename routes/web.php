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

Route::get('/', function () {
    return view('pages.index');
});


Route::get('accueil', function () {
    return view('pages.accueil');
});

Route::get('programme', function () {
    return view('pages.programme');
});

Route::get('admission', function () {
    return view('pages.admission');
});

Route::get('frais', function () {
    return view('pages.frais');
});

Route::get('bourses', function () {
    return view('pages.bourses');
});

Route::get('departement', function () {
    return view('pages.departement');
});

Route::get('carriere', function () {
    return view('pages.carriere');
});

Route::get('bourse', function () {
    return view('pages.bourse');
});


Route::get('blog', function () {
    return view('pages.blog');
});

Route::get('universite', function () {
    return view('pages.universite');
});

Route::get('partenaire', function () {
    return view('pages.partenaire');
});

Route::get('technologie', function () {
    return view('pages.technologie');
});




