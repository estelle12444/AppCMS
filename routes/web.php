<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PartnerController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\TypeDeDemandeController;
use App\Http\Controllers\TypeDemandeController;
use App\Models\Newsletter;
use App\Models\PageCount;
use App\Models\Partner;
use App\Models\Sector;
use Faker\Core\File;
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


Route::match([ 'post'], '/home', function (Request $request) {
    Newsletter::create($request->all());
    toastr()->success('Votre message a été enregistré avec succès');
    return redirect()->back();
})->name('index');



Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');


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

Route::get('/profil_admin', function () {
    return view('Front.admin.profi_admin.index');
});
Route::get('/media', function () {
    return view('Front.pages.media');
});

Route::get('/partners',[PartnerController::class, 'index']);


Route::get('/partners', [PartnerController::class, 'search'])->name('Front.admin.search');
Route::get('/partners', [PartnerController::class, 'search_process'])->name('Front.admin.search_process');

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
Route::get('/info/{tender}',  [AnnonceController::class, 'show_tender']
)->name('Front.pages.info');

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

Route::get('/job', [JobController::class, 'index'])->name('Front.admin.job.index');
    Route::get('/job/create', [JobController::class, 'create'])->name('Front.admin.job.create');
    Route::post('/job', [JobController::class, 'store'])->name('Front.admin.job.store');
    Route::delete('/job/{job}', [JobController::class, 'destroy'])->name('Front.admin.job.destroy');
    Route::get('/job/{job}/edit', [JobController::class, 'edit'])->name('Front.admin.job.edit');
    Route::put('/job/{job}',[JobController::class, 'update'])->name('Front.admin.job.update');

Route::get('/event', [EventController::class, 'index'])->name('Front.admin.event.index');
    Route::get('/event/create', [EventController::class, 'create'])->name('Front.admin.event.create');
    Route::post('/event', [EventController::class, 'store'])->name('Front.admin.event.store');
    Route::delete('/event/{event}', [EventController::class, 'destroy'])->name('Front.admin.event.destroy');
    Route::get('/event/{event}/edit', [EventController::class, 'edit'])->name('Front.admin.event.edit');
    Route::put('/event/{event}',[EventController::class, 'update'])->name('Front.admin.event.update');

Route::get('/career', [CareerController::class, 'index'])->name('Front.admin.career.index');
    Route::get('/career/create', [CareerController::class, 'create'])->name('Front.admin.career.create');
    Route::post('/career', [CareerController::class, 'store'])->name('Front.admin.career.store');
    Route::delete('/career/{career}', [CareerController::class, 'destroy'])->name('Front.admin.career.destroy');
    Route::get('/career/{career}/edit', [CareerController::class, 'edit'])->name('Front.admin.career.edit');
    Route::put('/career/{career}',[CareerController::class, 'update'])->name('Front.admin.career.update');

Route::get('/quotation', [QuotationController::class, 'index'])->name('Front.admin.quotation.index');
    Route::get('/quotation/create', [QuotationController::class, 'create'])->name('Front.admin.quotation.create');
    Route::post('/quotation', [QuotationController::class, 'store'])->name('Front.admin.quotation.store');
    Route::delete('/quotation/{quotation}', [QuotationController::class, 'destroy'])->name('Front.admin.quotation.destroy');
    Route::get('/quotation/{quotation}/edit', [QuotationController::class, 'edit'])->name('Front.admin.quotation.edit');
    Route::put('/quotation/{quotation}',[QuotationController::class, 'update'])->name('Front.admin.quotation.update');



Route::get('/count/', function (Request $request) {
    $filename = $request->query('filename');
    $page = PageCount::firstOrCreate(['url'=> $filename], ['name'=> $filename, 'count'=>0, 'url'=>$filename]);
    $page->count = $page->count + 1;
    $page->save();

    return response()->file(storage_path('app/public/'.$filename));
})->name('download_file');



Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('auth.login');


Auth::routes();

Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('Front.profil.home');
Route::get('/admin', [AdminController::class, 'dashboard'])->name('Front.admin.home');


// Route::get('/auth/register',  [RegisterController::class, 'create'])->name('auth.register');
// Route::post('auth',  [RegisterController::class, 'store'])->name('auth.login');


Route::get('/auth/register', [CompanyController::class,'step1']) ;
Route::post('/auth/register', [CompanyController::class,'storeStep1'])->name('company.step1');



Route::get('/auth/register-other',[CompanyController::class,'step2']);
Route::post('/auth/register-other',  [CompanyController::class,'storeStep2'])->name('company.step2');


Route::get('/company', [AdminController::class, 'company']);
Route::get('/company/{company}/edit', [CompanyController::class, 'edit'])->name('Front.admin.company.info');

Route::get('/auth/confirmation-page', function () {
    return view('auth.confirmation-page');
});

Route::put('/valider-compagnie/{id}', [CompanyController::class, 'validerCompagnie'])->name('validerCompagnie');


Route::get('/demande/{typeDeDemande}', [TypeDeDemandeController::class, 'form'])->name('Front.profil.form');

