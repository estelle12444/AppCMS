<?php

use App\Http\Controllers\DownloadController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

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

Route::get('/', function () {
    return view('Front.landing');
});
Route::get('/accueil', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('Front.pages.contact');
});
Route::get('/opportunity', function () {
    return view('Front.pages.opportunity');
});

Route::get('/about', function () {
    return view('Front.pages.about');
});

Route::get('/join', function () {
    return view('Front.pages.join');
});

Route::get('/espace', function () {
    return view('Front.pages.espace');
});

Route::get('/installer', function () {
    return view('Front.pages.installer');
});

Route::get('/mediatheque', function () {
    return view('Front.pages.mediatheque');
});

Route::post('/contact', function (Request $request) {
    Message::create($request->all());
    toastr()->success('Votre message a été enregistré avec succès');
    return redirect()->back();
})->name('contact');


Route::get('/messages', function (Request $request) {
    $messages = Message::all();
    return view('message', compact('messages'));
});



Route::get('/telecharger-pdf', [DownloadController::class, 'telechargerPDF']);
Route::get('/download-pdf', [DownloadController::class, 'downloadPDF']);
