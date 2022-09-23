<?php

use Illuminate\Support\Facades\Route;

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


// Route::post('elsa', function () {
//     return view('welcome');
// });

// Route::view('elsa', 'welcome');

Route::get('my', function () {
    return view('biodata', ['nrp' => '160419157']);
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('myfriend/{nrp}', function ($nrp) {
//     return view('biodata', ['nrp' => $nrp]);
// });

Route::get('myfriend/{nrp?}', function ($nrp = null) {
    if($nrp == null) {
        return view('biodata');
    }
    // return view('nrp', ['nrp'=>$nrp]);
    return view('biodata', compact('nrp'));
});

Route::get('myfriend', function () {
    return view('biodata');
});

Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);


