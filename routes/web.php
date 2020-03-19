<?php

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

Route::get('/login', function(){
    return 'login';
})->name('login');

Route::middleware(['auth'])->group(function(){

    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', function(){
            return 'Home admin';
        });
    
        Route::get('/financeiro', function(){
            return 'Financeiro admin';
        });
    
        Route::get('/produtos', function(){
            return 'Produtos admin';
        });
    });

});









Route::get('/registro/{flag?}', function($flag = '') {
    return "Seu nome é {$flag}";
});

Route::get('/', function () {
    return view('welcome');
});
