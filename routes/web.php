<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;



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

// Route::get("/db/version", function() {
//     $results = DB::select('select * from users');

//     echo $results;
    
// });

Route::get('/db/version',[TestController::class,'index']);

