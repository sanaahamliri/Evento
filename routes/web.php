<?php

use App\Http\Controllers\BlockController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SinglePageController;
use Illuminate\Console\Scheduling\Event;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


/** categories */
Route::post('/admin/categorie', [CategorieController::class, 'ajoutercategorie'])->name('categorie.ajoutercategorie');
Route::get('/admin/categories', [CategorieController::class, 'allcategorie'])->name('admin.categories');
Route::get('/admin/categorie', [CategorieController::class, 'allcategorie'])->name('categorie.allcategorie');
Route::put('/admin/categorie/{id}', [CategorieController::class, 'update'])->name('categorie.Modicategorie');
Route::delete('/admin/categorie/{id}', [CategorieController::class, 'destroy'])->name('categorie.deletecategorie');
/** End categories */


/** events */
Route::post('/organisateur/event', [EventController::class, 'ajouterevent'])->name('event.ajouterevent');
Route::get('/organisateur/events', [EventController::class, 'allevent'])->name('organisateur.events');
Route::get('/organisateur/event', [EventController::class, 'allevent'])->name('event.allevent');
Route::put('/organisateur/event/{id}', [eventController::class, 'update'])->name('event.Modievent');
Route::delete('/organisateur/event/{id}', [eventController::class, 'destroy'])->name('event.deleteevent');
/** End events */

// home page
Route::get('/organisateur/block', function () {
    return view('organisateur.block');
});
Route::get('/admin/dashboard', [CategorieController::class, 'index'])->name('admin.dashboard');

Route::get('/home', [HomeController::class, 'showEvents']);
Route::get('/singlePage/{event}', [eventController::class, 'show'])->name('event.show');

Route::get('/admin/block', [BlockController::class, 'showBlockedUsers'])->name('admin.block');


// home page end


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
