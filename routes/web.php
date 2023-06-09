<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// All listings
Route::get('/', function(){
return view('listings', [
    'heading'=>'latestlistings',
    'listings'=>Listing::all()
]);
});

// For single listing
Route::get('/listings/{id}',function($id){
    return view(
        'listing',[
            'listing'=>Listing::find($id)
        ]
        );
});
