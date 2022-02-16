<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/greating', function (){
    return "Szia uram!";
});
//Route::get('/user', [UserController::class, 'index']);
//Route::redirect('/greating','/');
/*
Route::get('/user/{id?}/{name?}', function( $id = "add meg az id-t ", $name = "add meg a nevet") {
    //dd($name);
    return $id." ".$name;
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);
Route::get('/user/{id?}/{name?}', function( $id = "add meg az id-t ", $name = "add meg a nevet") {
    //dd($name);
    return $id." ".$name;
})->whereNumber('id')->whereAlpha('name');*/
Route::get('/user/{name?}', function( $name ) {
    return "Név: ".$name;
})->where('name', '.*');
