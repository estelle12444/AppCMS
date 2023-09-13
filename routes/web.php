<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\PartnerController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\TypeDeDemandeController;
use App\Http\Controllers\TypeDemandeController;
use App\Models\Partner;
use App\Models\Sector;
use Illuminate\Support\Facades\Auth;

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
    return view('Front.landingg');
});

Route::get('/home', function () {
   return view('index');
});

// Route::get('/home', function () {
//     return view('index');
// });

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

Route::get('/media', function () {
    return view('Front.pages.media');
});

Route::get('/partners', function (Request $request) {
    $partners = Partner::all();
    $sectors = Sector::all();

    return view('Front.pages.etsagre', compact('partners', 'sectors'));
});

Route::get('/partners', [PartnerController::class, 'search'])->name('Front.admin.search');
Route::post('/partners', [PartnerController::class, 'search_process'])->name('Front.admin.search_process');

Route::get('/installer', function () {
    return view('Front.pages.installer');
});

Route::get('/form', function () {
    return view('Front.pages.form');
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


Route::get('/actu', function () {
    return view('Front.pages.actu');
});

Route::get('/annonce', [AnnonceController::class, 'index']);



Route::get('/telecharger-pdf', [DownloadController::class, 'telechargerPDF']);
Route::get('/download-pdf', [DownloadController::class, 'downloadPDF']);
Route::get('/opportunity-pdf', [DownloadController::class, 'opportunityPDF']);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/partner', [AdminController::class, 'index'])->name('Front.admin.partner.index');
    Route::get('/partner/create', [AdminController::class, 'create'])->name('Front.admin.partner.create');
    Route::post('/partner', [AdminController::class, 'store'])->name('Front.admin.partner.store');
    Route::delete('/partner/{partner}', [AdminController::class, 'destroy'])->name('Front.admin.partner.destroy');
    Route::get('/partner/{partner}/edit', [AdminController::class, 'edit'])->name('Front.admin.partner.edit');
    Route::put('/partner/{partner}', [AdminController::class, 'update'])->name('Front.admin.partner.update');

Route::get('/sector', [SectorController::class, 'index'])->name('Front.admin.sector.index');
    Route::get('/sector/create', [SectorController::class, 'create'])->name('Front.admin.sector.create');
    Route::post('/sector', [SectorController::class, 'store'])->name('Front.admin.sector.store');
    Route::get('/sector/{sector}/edit', [SectorController::class, 'edit'])->name('Front.admin.sector.edit');
    Route::put('/sector/{sector}', [SectorController::class, 'update'])->name('Front.admin.sector.update');
    Route::delete('/sector/{sector}', [SectorController::class, 'destroy'])->name('Front.admin.sector.destroy');


Route::get('/tender', [TenderController::class, 'index'])->name('Front.admin.tender.index');
    Route::get('/tender/create', [TenderController::class, 'create'])->name('Front.admin.tender.create');
    Route::post('/tender', [TenderController::class, 'store'])->name('Front.admin.tender.store');
    Route::delete('/tender/{tender}', [TenderController::class, 'destroy'])->name('Front.admin.tender.destroy');
    Route::get('/tender/{tender}/edit', [TenderController::class, 'edit'])->name('Front.admin.tender.edit');
    Route::put('/tender/{tender}',[TenderController::class, 'update'])->name('Front.admin.tender.update');


Route::get('/admin', function (Request $request) {

    return view('Front.admin.home');
});

Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('auth.login');


Auth::routes();

Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('Front.profil.home');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('Front.admin.home');


Route::get('/auth/register',  [RegisterController::class, 'create'])->name('auth.register');
Route::post('auth',  [RegisterController::class, 'store'])->name('auth.login');

Route::get('/demande/{typeDeDemande}', [TypeDeDemandeController::class, 'form'])->name('Front.profil.form');

