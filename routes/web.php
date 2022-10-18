<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/saveApprenantsRoute', [ApprenantsController::class, 'show'])->name('saveApprenants');
// Route::post('/addApprentans', [ApprenantsController::class, 'addApprenants'])->name('saveApprenants');


Route::get('/request', function (){
    return view('index');
});

use Illuminate\Http\Request;

Route::any('/user', function (Request $request) {
    $name = $request->input("input");
    return $name;
});
