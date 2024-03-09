<?php

use App\Http\Controllers\BlockController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganisatorController;
use App\Http\Controllers\SinglePageController;
use Illuminate\Console\Scheduling\Event;



/*========welcome page=========*/
Route::get('/', function () {
    return view('welcome');
});
/*======== end welcome page=========*/



/*========client page=========*/
Route::get('/home', function () {return view('home');});
Route::get('/home', [HomeController::class, 'showEvents']);
Route::get('/singlePage/{event}', [eventController::class, 'show'])->name('event.show');
/*========end client page=========*/



/*========organisateur page=========*/
//events
Route::post('/organisateur/event', [EventController::class, 'ajouterevent'])->name('event.ajouterevent');
Route::get('/organisateur/events', [EventController::class, 'allevent'])->name('organisateur.events');
Route::get('/organisateur/event', [EventController::class, 'allevent'])->name('event.allevent');
Route::put('/organisateur/event/{id}', [eventController::class, 'update'])->name('event.Modievent');
Route::delete('/organisateur/event/{id}', [eventController::class, 'destroy'])->name('event.deleteevent');
//End events
/*========end organisateur page=========*/




/*========admin page=========*/
Route::get('/admin/dashboard', [CategorieController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/block', [BlockController::class, 'showBlockedUsers'])->name('admin.block');
Route::get('/admin/blocked', [BlockController::class, 'showUnBlockedUsers'])->name('admin.blocked');
Route::get('/admin/validate', [EventController::class, 'showUnValidEvents'])->name('admin.validate');
Route::patch('/admin/{client}/block', [ClientController::class, 'ban'])->name('client.ban');
Route::put('/admin/block/{organisator}', [OrganisatorController::class, 'ban'])->name('organisator.ban');
Route::patch('/admin/{event}/validate', [EventController::class, 'validation'])->name('event.validate');


//categories
Route::post('/admin/categorie', [CategorieController::class, 'ajoutercategorie'])->name('categorie.ajoutercategorie');
Route::get('/admin/categories', [CategorieController::class, 'allcategorie'])->name('admin.categories');
Route::get('/admin/categorie', [CategorieController::class, 'allcategorie'])->name('categorie.allcategorie');
Route::put('/admin/categorie/{id}', [CategorieController::class, 'update'])->name('categorie.Modicategorie');
Route::delete('/admin/categorie/{id}', [CategorieController::class, 'destroy'])->name('categorie.deletecategorie');
// End categories
/*========end admin page=========*/


/*profil settings*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/*end profil settings*/

require __DIR__ . '/auth.php';
