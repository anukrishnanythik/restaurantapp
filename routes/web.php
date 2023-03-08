<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;


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

Route::get('/', [homeController::class,"index"]);
Route::get('/redirects', [homeController::class,"redirects"]);

Route::get('/user', [adminController::class,"user"])->name('user');
Route::get('/deleteuser/{id}', [adminController::class,"deleteuser"])->name('deleteuser');

Route::get('/foodmenu', [adminController::class,"showfoodmenu"])->name('showfoodmenu');
Route::get('/addfoodmenu', [adminController::class,"addfoodmenu"])->name('addfoodmenu');
Route::post('/uploadfoodmenu', [adminController::class,"uploadfoodmenu"])->name('uploadfoodmenu');
Route::get('/editfoodmenu/{id}', [adminController::class,"editfoodmenu"])->name('editfoodmenu');
Route::get('/deletefoodmenu/{id}', [adminController::class,"deletefoodmenu"])->name('deletefoodmenu');
Route::post('/updatefoodmenu/{id}', [adminController::class,"updatefoodmenu"])->name('updatefoodmenu');

Route::post('/up', 'adminController@uploadreservation')->name('uploadreservation');
Route::get('/reservation', 'adminController@showreservation')->name('showreservation');

 Route::get('/addchef', 'adminController@addchef')->name('addchef');
 Route::post('/uploadreservation', 'adminController@uploadchef')->name('uploadchef');
 Route::get('/showchef', 'adminController@showchef')->name('showchef');
 Route::get('/editchef/{id}', 'adminController@editchef')->name('editchef');
 Route::get('/deletechef/{id}', 'adminController@deletechef')->name('deletechef');
 Route::post('/updatechef/{id}', 'adminController@updatechef')->name('updatechef');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
