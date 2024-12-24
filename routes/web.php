<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/',[HomeController::class,
'index'
]);

Route::get('/products',[ProductController::class,'index']);
Route::post('/products',[ProductController::class,'store']);
Route::delete('/products/{id}',[ProductController::class, 'destroy']);
Route::get('/products/{id}/edit',[ProductController::class,'edit']);
Route::put('/products/{id}',[ProductController::class, 'update']);
Route::get('/addproduct',[ProductController::class,'create']);


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index'
]);
Route::get('/dashboard', function (){
    return view('dashboard');
});

// Route::get('/products', function (){
//     return view('product');
// });

Route::get('/orders', function (){
    return view('order');
});
