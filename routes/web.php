<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CompanyAuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PartnerController;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\TypeDeDemandeController;
use App\Http\Controllers\TypeDemandeController;
use App\Http\Middleware\Admin;
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
Route::get('/language/{locale?}', function ($locale=null) {
    if ($locale != null && in_array($locale, ['fr', 'en'])) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang');

Route::get('/', function () {
    return view('Front.landingg');
});

Route::get('/home',[HomeController::class,'Advantageindex'])->name('index');


Route::match(['post'], '/home', function (Request $request) {
    Newsletter::create($request->all());
    toastr()->success('Votre message a été enregistré avec succès');
    return redirect()->back();
})->name('index');

Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

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

Route::get('/media',  [NewController::class,'media'])->name('media');

Route::get('/avantages/{activity}',[HomeController::class,'avantages'] )->name('avantages.Detail');

Route::get('/actu/detail/{activity}',  [NewController::class,'newsDetail'] )->name('news.Detail');


Route::get('/partners', [PartnerController::class, 'index']);
Route::get('/installer', function () {return view('Front.pages.installer');});
Route::get('/actu', [NewController::class, 'newIndex'])->name('actu');
Route::get('/info/{activity}',[AnnonceController::class, 'show_tender'])->name('Front.pages.info');
Route::get('/annonce', [AnnonceController::class, 'index'])->name('annonce');


// file download
Route::get('/telecharger-pdf', [DownloadController::class, 'telechargerPDF']);
Route::get('/download-pdf', [DownloadController::class, 'downloadPDF']);
Route::get('/opportunity-pdf', [DownloadController::class, 'opportunityPDF']);

//register form
Route::get('/auth/register', [CompanyController::class, 'step1']);
Route::post('/auth/register', [CompanyController::class, 'storeStep1'])->name('company.step1');
Route::get('/auth/register-other', [CompanyController::class, 'step2']);
Route::post('/auth/register-other',  [CompanyController::class, 'storeStep2'])->name('company.step2');

//login form
Route::get('/company/login', [CompanyAuthController::class, 'showLoginForm'])->name('company.auth.showLogin');
Route::post('/company/login', [CompanyAuthController::class, 'login'])->name('company.auth.login');

Route::get('/logout', [App\Http\Controllers\CompanyAuthController::class, 'logout'])->name('company.auth.logout');

Auth::routes();

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', DashboardController::class)->name('Front.admin.home');
    Route::get('/profil_admin', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/profil_admin', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    Route::get('/parametres', [AdminController::class, 'settings'])->name('admin.settings');
    Route::post('/parametres', [AdminController::class, 'storeAdmin'])->name('admin.store');
    Route::get('/register_user', [AdminController::class, 'createAdmin'])->name('admin.create');
    Route::put('/admin/{user}/update',  [AdminController::class, 'updateUser'])->name('admin.update');
      Route::delete('admin/{user}/destroy',  [AdminController::class, 'destroyUser'])->name('admin.destroy');


    // Route::get('/admin', [AdminController::class, 'dashboard'])->name('Front.admin.home');
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
    Route::delete('/tender/{activity}', [TenderController::class, 'destroy'])->name('Front.admin.tender.destroy');
    Route::get('/tender/{activity}/edit', [TenderController::class, 'edit'])->name('Front.admin.tender.edit');
    Route::put('/tender/{activity}', [TenderController::class, 'update'])->name('Front.admin.tender.update');

    Route::get('/job', [JobController::class, 'index'])->name('Front.admin.job.index');
    Route::get('/job/create', [JobController::class, 'create'])->name('Front.admin.job.create');
    Route::post('/job', [JobController::class, 'store'])->name('Front.admin.job.store');
    Route::delete('/job/{activity}', [JobController::class, 'destroy'])->name('Front.admin.job.destroy');
    Route::get('/job/{activity}/edit', [JobController::class, 'edit'])->name('Front.admin.job.edit');
    Route::put('/job/{activity}', [JobController::class, 'update'])->name('Front.admin.job.update');

    Route::get('/event', [EventController::class, 'index'])->name('Front.admin.event.index');
    Route::get('/event/create', [EventController::class, 'create'])->name('Front.admin.event.create');
    Route::post('/event', [EventController::class, 'store'])->name('Front.admin.event.store');
    Route::delete('/event/{activity}', [EventController::class, 'destroy'])->name('Front.admin.event.destroy');
    Route::get('/event/{activity}/edit', [EventController::class, 'edit'])->name('Front.admin.event.edit');
    Route::put('/event/{activity}', [EventController::class, 'update'])->name('Front.admin.event.update');

    Route::get('/career', [CareerController::class, 'index'])->name('Front.admin.career.index');
    Route::get('/career/create', [CareerController::class, 'create'])->name('Front.admin.career.create');
    Route::post('/career', [CareerController::class, 'store'])->name('Front.admin.career.store');
    Route::delete('/career/{activity}', [CareerController::class, 'destroy'])->name('Front.admin.career.destroy');
    Route::get('/career/{activity}/edit', [CareerController::class, 'edit'])->name('Front.admin.career.edit');
    Route::put('/career/{activity}', [CareerController::class, 'update'])->name('Front.admin.career.update');

    Route::get('/quotation', [QuotationController::class, 'index'])->name('Front.admin.quotation.index');
    Route::get('/quotation/create', [QuotationController::class, 'create'])->name('Front.admin.quotation.create');
    Route::post('/quotation', [QuotationController::class, 'store'])->name('Front.admin.quotation.store');
    Route::delete('/quotation/{activity}', [QuotationController::class, 'destroy'])->name('Front.admin.quotation.destroy');
    Route::get('/quotation/{activity}/edit', [QuotationController::class, 'edit'])->name('Front.admin.quotation.edit');
    Route::put('/quotation/{activity}', [QuotationController::class, 'update'])->name('Front.admin.quotation.update');

    Route::get('/new', [NewController::class, 'index'])->name('Front.admin.new.index');
    Route::get('/new/create', [NewController::class, 'create'])->name('Front.admin.new.create');
    Route::post('/new', [NewController::class, 'store'])->name('Front.admin.new.store');
    Route::delete('/new/{activity}', [NewController::class, 'destroy'])->name('Front.admin.new.destroy');
    Route::get('/new/{activity}/edit', [NewController::class, 'edit'])->name('Front.admin.new.edit');
    Route::put('/new/{activity}', [NewController::class, 'update'])->name('Front.admin.new.update');


    Route::get('/advantage', [HomeController::class, 'index'])->name('Front.admin.advantage.index');
    Route::get('/advantage/create', [HomeController::class, 'create'])->name('Front.admin.advantage.create');
    Route::post('/advantage', [HomeController::class, 'store'])->name('Front.admin.advantage.store');
    Route::delete('/advantage/{activity}', [HomeController::class, 'destroy'])->name('Front.admin.advantage.destroy');
    Route::get('/advantage/{activity}/edit', [HomeController::class, 'edit'])->name('Front.admin.advantage.edit');
    Route::put('/advantage/{activity}', [HomeController::class, 'update'])->name('Front.admin.advantage.update');


    Route::get('/annonces-recentes', [AnnonceController::class, 'recentes'])->name('Front.admin.annonce.recent');
    // Route pour la liste des annonces moins récentes
    Route::get('/annonces-moins-recentes', [AnnonceController::class, 'moinsRecentes'])->name('Front.admin.annonce.moins-recent');

    Route::get('/company', [AdminController::class, 'company']);
    Route::get('/company/{company}/edit', [CompanyController::class, 'edit'])->name('Front.admin.company.info');

    Route::get('/auth/confirmation-page', function () {
        return view('auth.confirmation-page');
    });

    Route::put('/valider-compagnie/{id}', [CompanyController::class, 'validerCompagnie'])->name('validerCompagnie');
    Route::get('admin/activities/{activity}/applicants',[ApplicantController::class, 'applicantIndex'])->name('Front.admin.activities.applicants');

    Route::get('/content', [ContentController::class, 'ContentIndex'])->name('ContentIndex');
    Route::get('/content/pages/{key}', [ContentController::class, 'ContentPage'])->name('ContentPage');

    Route::get('/content/Image/{key}/edit', [ContentController::class, 'imageContentPage'])->name('ImageContentPage');
    Route::put('/content/Image/{key}',[ContentController::class, 'imageSaveContent'])->name('ImagesaveContent');


    Route::get('/content/pages/{key}/edit', [ContentController::class, 'ContentPageEdit'])->name('ContentPageEdit');
    Route::put('/content/pages/{key}',[ContentController::class, 'saveContent'])->name('saveContent');
    Route::get('/content/pages/{key}/group',[ContentController::class, 'ContentPageEditGroup'])->name('ContentPageGroup');

    Route::post('applicant/accepter/{id}', [ApplicantController::class, 'accepter'])->name('accepter');
    Route::post('applicant/refuser/{id}', [ApplicantController::class, 'refuser'])->name('refuser');


});


Route::get('/count/', function (Request $request) {
    $filename = $request->query('filename');
    $page = PageCount::firstOrCreate(['url' => $filename], ['name' => $filename, 'count' => 0, 'url' => $filename]);
    $page->count = $page->count + 1;
    $page->save();

    return response()->file(storage_path('app/public/' . $filename));
})->name('download_file');


Route::middleware(['profil'])->group(function () {

    Route::get('/profil', [ProfilController::class, 'index'])->name('Front.profil.home');

    Route::get('/profil/demande', [App\Http\Controllers\ProfilController::class, 'demande'])->name('Front.profil.demande');

    Route::get('/profil/etat-demande', [App\Http\Controllers\DemandeController::class, 'etatdemande'])->name('Front.profil.etat-demande');
    Route::get('/profil/document', [App\Http\Controllers\ProfilController::class, 'userDocumentsByType'])->name('Front.profil.document');
    Route::get('/demande/{typeDeDemande}', [TypeDeDemandeController::class, 'form'])->name('Front.profil.form');
    Route::post('/demande/{typeDeDemande}/store', [TypeDeDemandeController::class, 'store'])->name('store');


    Route::get('/profil/{company}/edit/{typeDeDemande}',  [TypeDeDemandeController::class, 'editcompany'])->name('company-edit');
    Route::put('/profil/{company}/update/{typeDeDemande}', [TypeDeDemandeController::class, 'update'])->name('update-company');

    Route::get('/profil/document/{document}/edit', [TypeDeDemandeController::class, 'editdocument'])->name('documents.edit');
    Route::put('/profil/document/{document}/update', [TypeDeDemandeController::class, 'updatedocument'])->name('documents.update');
    Route::delete('/profil/documents/{document}', [TypeDeDemandeController::class, 'destroydocument'])->name('documents.destroy');

    Route::get('/check-session-status', 'AuthController@checkSessionStatus')->name('check-session-status');

    Route::get('/document/storage/{filepath}',[TypeDeDemandeController::class, 'retrieveDocument'])->name('documents.filename');
        // Route pour la liste des annonces récentes

    Route::get('/demandes', [DemandeController::class, 'index'])->name('demandes.index');
    // Exemple de route pour télécharger le document
    Route::get('/telecharger-document/{id}', [DemandeController::class, 'telechargerDocument'])->name('telecharger-document');

    Route::get('/applicant/form/{activity}', [ApplicantController::class, 'showForm'])->name('application.form');
    Route::post('/submit-applicant/{activity}', [ApplicantController::class, 'store'])->name('application.store');
    Route::get('/applicants', [ApplicantController::class, 'applications'])->name('applications.index');
    Route::get('/download/{filename}', [ApplicantController::class,'downloadAttachment'])->name('download.attachment');


});
