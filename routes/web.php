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

Route::get('/', 'HomeController@index');

Route::get('/timing/create', 'TimingController@create');
Route::post('/timing/store', 'TimingController@store');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Route::get('/play', function () {
    App\User::create([
        'name' => 'admin',
        'user_type_id' => 1,
        'email' => 'admin@localhost.com',
        'password' => bcrypt('1234'),

    ]);
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\DashBoardController@index');
});

Route::auth();
