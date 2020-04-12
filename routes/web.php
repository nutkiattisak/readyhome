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

Route::get('/', function () {
    
    if (Auth::check())
    {
        return view('home');
    }
    else{
        return view('auth.login');
    }

});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::prefix('settings')->group(function(){
    Route::middleware(['auth'])->group(function (){
        Route::get('/rooms', 'RoomsSettingsController@index')->name('rooms-settings.index');
        Route::get('rooms/create', 'RoomsSettingsController@create')->name('rooms-settings.create');
        Route::post('/rooms/store', 'RoomsSettingsController@store')->name('rooms-settings.store');
        Route::put('/rooms/update', 'RoomsSettingsController@update')->name('rooms-settings.update');
        Route::get('/rooms/edit/{id}', 'RoomsSettingsController@edit')->name('rooms-settings.edit');
        Route::get('/rooms/delete/{id}', 'RoomsSettingsController@destroy')->name('rooms-settings.delete');
    });
});

Route::prefix('rooms')->group(function(){
    Route::middleware(['auth'])->group(function(){
        Route::get('/', 'RoomsController@index')->name('rooms.index');
        Route::get('/manage/{room_id}', 'RoomsController@manage')->name('rooms.manage-rooms');
        Route::get('/manage/agreements/{room_id}', 'RoomsController@agreements')->name('rooms.manage-agreements');


        Route::get('/manage/tenants/{room_id}', 'TenantsController@create')->name('rooms.manage-tenants.create');
        Route::post('/manage/tenants/store', 'TenantsController@store')->name('rooms.manage-tenants.store');
        Route::get('/manage/tenants/edit/{tenant_id}', 'TenantsController@edit')->name('rooms.manage-tenants.edit');

    });
});

Route::prefix('tenants')->group(function(){
    Route::get('/', 'TenantsController@index')->name('tenants.index');
    Route::get('tenants/old', 'TenantsController@tenantsold')->name('tenants.shows-old');
    Route::get('tenants/new', 'TenantsController@tenantsold')->name('tenants.shows-new');
});





    

    
    

    
    
    Route::resource('users', 'UsersController');
    Route::get('profile', 'ProfilesController@index')->name('profile');
    Route::put('profile', 'ProfilesController@update')->name('profiles.update-profile');

 
    
    
    Route::get('meters', 'MetersController@index')->name('meters');
    Route::get('meters/create', 'MetersController@create')->name('meters.create');
    
   
    
    



