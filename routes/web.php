<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

use App\Http\Controllers\HomeController;

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

//natrag
Route::get('/home/natrag',[App\Http\Controllers\HomeController::class,'natrag']);

// Dodavanje novog poduzeća

Route::get('/home/dodajPoduzece',[App\Http\Controllers\HomeController::class,'dodajPoduzece']);
Route::post('/home/novoPoduzece',[App\Http\Controllers\HomeController::class,'novoPoduzece']);

//Uređivanje poduzeća
Route::get('/home/urediPoduzece/{id}',[App\Http\Controllers\HomeController::class,'urediPoduzece']);
Route::post('/home/uredenoPoduzece',[App\Http\Controllers\HomeController::class,'uredenoPoduzece']);

//Pregledaj podatke o poduzecu
Route::get('/home/pregledajPoduzece/{id}',[App\Http\Controllers\HomeController::class,'pregledajPoduzece']);

//Obrisi poduzece
Route::get('/home/obrisiPoduzece/{id}',[App\Http\Controllers\HomeController::class,'obrisiPoduzece']);

//Preuzmi tablicu excel tablicu s poduzecima
Route::get('/download',[App\Http\Controllers\HomeController::class,'export'] );


//Dodaj zaposlenika
Route::get('/home/dodajZaposlenika',[App\Http\Controllers\HomeController::class,'dodajZaposlenika']);
Route::post('/home/noviZaposlenik',[App\Http\Controllers\HomeController::class,'noviZaposlenik']);

//Uredi zaposlenika
Route::get('/home/urediZaposlenika/{id}',[App\Http\Controllers\HomeController::class,'urediZaposlenika']);
Route::post('/home/uredeniZaposlenik',[App\Http\Controllers\HomeController::class,'uredeniZaposlenik']);

//Pregledaj podatke o zaposleniku
Route::get('/home/pregledajZaposlenika/{id}',[App\Http\Controllers\HomeController::class,'pregledajZaposlenika']);

//Obrisi zaposlenika
Route::get('/home/obrisiZaposlenika/{id}',[App\Http\Controllers\HomeController::class,'obrisiZaposlenika']);

//Preuzmi excel tablicu s zaposlenicima
Route::get('/downloadZaposlenici',[App\Http\Controllers\HomeController::class,'exportZaposlenici'] );

//Započni rad
Route::get('/home/zapocniRad',[App\Http\Controllers\HomeController::class,'zapocniRad']);
//Završi rad
Route::get('/home/zavrsiRad',[App\Http\Controllers\HomeController::class,'zavrsiRad']);

//Dodaj rad ručno
Route::get('/home/dodajRad',[App\Http\Controllers\HomeController::class,'dodajRad']);
Route::post('/home/noviRad',[App\Http\Controllers\HomeController::class,'noviRad']);

//Pregledaj podatke o odradenom radu
Route::get('/home/pregledajRad/{id}',[App\Http\Controllers\HomeController::class,'pregledajRad']);

//Uredi zaposlenika
Route::get('/home/urediRad/{id}',[App\Http\Controllers\HomeController::class,'urediRad']);
Route::post('/home/uredeniRad',[App\Http\Controllers\HomeController::class,'uredeniRad']);


//Obrisi rad
Route::get('/home/obrisiRad/{id}',[App\Http\Controllers\HomeController::class,'obrisiRad']);

//Preuzmi excel tablicu s odradenih radova
Route::get('/downloadRad',[App\Http\Controllers\HomeController::class,'exportRad'] );

//Uredi podatke o trenutnom korisniku stranice
Route::get('/home/urediTrenutnogKorisnika',[App\Http\Controllers\HomeController::class,'urediTrenutnogKorisnika'] );

//Spremi promjene u trenutnom korisnku
Route::post('/home/uredeniTrenutniKorisnik',[App\Http\Controllers\HomeController::class,'uredeniTrenutniKorisnik'] );