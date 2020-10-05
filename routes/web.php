<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth','CheckRole:admin,user']], function () {

    Route::get('admin/dashboard' ,'Backend\AdminController@dashboard')->name('admin.dashboard');
    Route::get('admin/profil' ,'Backend\AdminController@Profil')->name('admin.profil');
    Route::patch('admin/profil' ,'Backend\AdminController@ProfilUpdate')->name('admin.profil');
    Route::patch('admin/password' ,'Backend\AdminController@PasswordUpdate')->name('admin.password');


    Route::get('News/Create','NewsController@Create')->name('news.create');
    Route::post('News/Create','NewsController@Store')->name('news.Create');
    Route::post('News/{news:slug}/Edit','newsController@Edit')->name('news.edit');
    Route::patch('News/{news:slug}/Edit','newsController@Update')->name('news.edit');
    Route::delete('News/{news:slug}/Delete','newsController@Delete')->name('news.delete');


});
