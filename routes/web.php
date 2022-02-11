<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorseController;
use App\Http\Controllers\GroomController;
use App\Http\Controllers\BreedController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
Route::get('/',[HomeController::class,'horseListPublic']);
Route::get('/loguj',[HomeController::class,'loginStatus']);
Route::get('/domowa',[HomeController::class,'horseListPublic']);

//Horse part
Route::get('/horses',[HorseController::class,'horseList']);
Route::get('/add_horse',[HorseController::class,'addHorseView'])->middleware('auth');
Route::post('/add_horse',[HorseController::class,'addHorse']);
Route::get('/delete_horse/{name}',[HorseController::class,'deleteHorse'])->middleware('auth');

//Groom part
Route::get('/grooms',[GroomController::class,'groomList'])->middleware('auth');
Route::get('/add_groom',[GroomController::class,'addGroomView'])->middleware('auth');
Route::post('add_groom',[GroomController::class,'addGroom']);
Route::get('/delete_groom/{idgr}',[GroomController::class,'deleteGroom'])->middleware('auth');

//Breed part
Route::get('/breeds',[BreedController::class,'breedList'])->middleware('auth');
Route::get('/add_breed',[BreedController::class,'addBreedView'])->middleware('auth');
Route::post('add_breed',[BreedController::class,'addBreed']);
Route::get('/delete_breed/{idb}',[BreedController::class,'deleteBreed'])->middleware('auth');
require __DIR__.'/auth.php';
