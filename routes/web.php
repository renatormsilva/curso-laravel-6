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
/*
Route::middleware([])->group(function(){

    Route::prefix('admin')->group(function(){

        Route::namespace('Admin')->group(function(){

            Route::name('admin.')->group(function(){
                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
    
                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
        
                Route::get('/produtos', 'TesteController@teste')->name('produtos');

                Route::get('/', function(){
                    return redirect()->route('admin.dashboard');
                });
            });

            
        });

        
    });

});
*/

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
], function(){
    Route::get('/dashboard', 'TesteController@teste')->name('admin.dashboard');
    
    Route::get('/financeiro', 'TesteController@teste')->name('admin.financeiro');
        
    Route::get('/produtos', 'TesteController@teste')->name('admin.produtos');

    Route::get('/', function(){
         return redirect()->route('admin.dashboard');
    })->name('home');
});









Route::get('/registro/{flag?}', function($flag = '') {
    return "Seu nome é {$flag}";
});

Route::get('/', function () {
    return view('welcome');
});
