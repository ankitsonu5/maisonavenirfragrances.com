<?php

use App\Http\Controllers\IndeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AIFragranceFinderController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\SystemTrackingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ScentopiaController;

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



Route::get('/', [IndeController::class, 'home'])->name('index');
Route::get('/fragrance-details', [IndeController::class, 'fragrance_details']);
Route::get('/service/{slug}', [IndeController::class, 'service'])->name('service');
Route::get('/about', [IndeController::class, 'about'])->name('about');
Route::get('/faq', [IndeController::class, 'faq'])->name('faq');
Route::get('/our-fragrance', [IndeController::class, 'ourfragrance'])->name('ourfragrance');
Route::get('/our-fragrance/detail/{slug}', [IndeController::class, 'fragrancedetail'])->name('fragrancedetail');
// Route::get('/aifragrancefinder', [IndeController::class, 'aifragrancefinder'])->name('aifragrancefinder');
Route::get('/fragrancematchmaker', [IndeController::class, 'fragrancematchmaker'])->name('fragrancematchmaker');
Route::get('/contact-us', [IndeController::class, 'contact'])->name('contact');
Route::get('/our-founder', [IndeController::class, 'ourfounder'])->name('ourfounder');

Route::get('/track-system-data', [SystemTrackingController::class, 'trackAndSaveSystemData']);



Route::get('/privacy-policy', [IndeController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/cookie-policy', [IndeController::class, 'cookiepolicy'])->name('cookiepolicy');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/thank-you', [ContactController::class, 'thankyou'])->name('contact.thankyou');

Route::get('/blog', [IndeController::class, 'blog'])->name('blog');
Route::get('/blog/detail/{slug}', [IndeController::class, 'blogdetail'])->name('blog.detail');


Route::get('/aifragrancefinder', [AIFragranceFinderController::class, 'AIFragranceFinder'])->name('aifragrancefinder');
Route::get('/ai-fragrance-finder/form', [AIFragranceFinderController::class, 'form'])->name('AIFragranceFinder.form');
Route::get('/ai-fragrance-finder/choose-fragrance', [AIFragranceFinderController::class, 'choose_fragrance'])->name('AIFragranceFinder.choose.fragrance');


Route::get('/ai-fragrance-finder/ingredients', [AIFragranceFinderController::class, 'ingredients'])->name('AIFragranceFinder.ingredients');
Route::post('/ai-fragrance-finder/ingredients', [AIFragranceFinderController::class, 'storeIngredients'])->name('ingredients.store');


Route::get('/ai-fragrance-finder/fragrance-accords', [AIFragranceFinderController::class, 'showFragranceAccords'])->name('fragranceAccords.show');
Route::post('/ai-fragrance-finder/fragrance-accords', [AIFragranceFinderController::class, 'storeFragranceAccords'])->name('fragranceAccords.store');

Route::get('/ai-fragrance-finder/fragrance-families', [AIFragranceFinderController::class, 'showFragranceFamilies'])->name('fragranceFamilies.show');
Route::post('/ai-fragrance-finder/fragrance-families', [AIFragranceFinderController::class, 'storeFragranceFamilies'])->name('fragranceFamilies.store');

Route::get('/ai-fragrance-finder/choosemood/{personalize?}', [AIFragranceFinderController::class, 'choosemood'])->name('AIFragranceFinder.choosemood');
Route::post('/ai-fragrance-finder/choosemood', [AIFragranceFinderController::class, 'storechoosemood'])->name('choosemood.store');


Route::get('/ai-fragrance-finder/chooseocassion', [AIFragranceFinderController::class, 'showchooseocassion'])->name('chooseocassion.show');
Route::post('/ai-fragrance-finder/chooseocassion', [AIFragranceFinderController::class, 'storechooseocassion'])->name('chooseocassion.store');

Route::get('/ai-fragrance-finder/products', [AIFragranceFinderController::class, 'filterProducts'])->name('products.filter');

// ---------------------------------------------------------------- --------------------------------
Route::get('/import/index', [AIFragranceFinderController::class, 'importindexs'])->name('import.index');
Route::post('/import', [AIFragranceFinderController::class, 'import'])->name('dynamic.import');
// ---------------------------------------------------------------- --------------------------------

Route::get('session-resate/{session?}', [AIFragranceFinderController::class, 'session_resate'])->name('session.resate');



Route::post('/enquiry-form/store', [EnquiryController::class, 'store'])->name('enquiry-form.store');

// our-fragrance  demo
Route::get('/our-fragrance/demo', [IndeController::class, 'demofragrancedetail']);

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';

Route::get('/tabout', function () {
    return view('website.pages.abouttest');
});


Route::controller(ScentopiaController::class)->prefix('scentopia')->name('scentopia.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/product', 'product')->name('product');

    Route::prefix('product')->name('product.')->group(function () {

        // Aura
        Route::prefix('aura')->name('aura.')->group(function () {
            Route::get('/', 'aura')->name('index');
            Route::get('/eternal-oud', 'eternalOud')->name('eternal-oud');
            Route::get('/ethereal-embrace', 'etherealEmbrace')->name('ethereal-embrace');
            Route::get('/jardin-de-jade', 'jardinDeJade')->name('jardin-de-jade');
            Route::get('/noir-intense', 'noirIntense')->name('noir-intense');
            Route::get('/vortex-echo', 'vortexEcho')->name('vortex-echo');
        });

        // Elixir
        Route::prefix('elixir')->name('elixir.')->group(function () {
            Route::get('/', 'elixir')->name('index');
            Route::get('/electraelixir', 'electraelixir')->name('electraelixir');
            Route::get('/nebula-nectar', 'nebulaNectar')->name('nebula-nectar');
            Route::get('/nova-noir', 'novaNoir')->name('nova-noir');
            Route::get('/oud-intense', 'oudIntense')->name('oud-intense');
        });

        // Supernova
        Route::prefix('supernova')->name('supernova.')->group(function () {
            Route::get('/', 'supernova')->name('index');
            Route::get('/avenir-triumph', 'avenirTriumph')->name('avenir-triumph');
            Route::get('/majestic-millenium', 'majesticMillenium')->name('majestic-millenium');
            Route::get('/oud-opulence', 'oudOpulence')->name('oud-opulence');
        });

        // Zenith
        Route::prefix('zenith')->name('zenith.')->group(function () {
            Route::get('/', 'zenith')->name('index');
            Route::get('/aurora-opulence', 'auroraOpulence')->name('aurora-opulence');
            Route::get('/midnight-solstice', 'midnightSolstice')->name('midnight-solstice');
            Route::get('/opulent-odyssey', 'opulentOdyssey')->name('opulent-odyssey');
        });
    });
});
