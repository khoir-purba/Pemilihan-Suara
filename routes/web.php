<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return 'whatever';
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'khoir', 'phone' => '08.....']);
});

route::redirect('/contact', '/contact-us');

Route::get('/product', function(){
    return 'product';
});

route::get('/product/{id}', function($id){
return view('product.detail', ['id' => $id]);
});

Route::prefix('administrator')->group(function () {
    route::get('/profile-admin', function(){
        return 'profil admin';
    });

    route::get('/about-admin', function(){
        return 'about admin';
    });

    route::get('/contact-admin', function(){
        return 'contact admin';
    });
});
