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
//Route::get('login', App\Http\Livewire\Template\Login::class)->name('login');
// Example Routes
//Route::view('/','simple');
Route::get('/',[App\Http\Controllers\ContactForm::class,'index']);
Route::post('/',[App\Http\Controllers\ContactForm::class,'store'])->name('contact.store');
Route::view('proyectos','layouts.projects');
//Route::get('dashboard', App\Http\Livewire\Dashboard::class)->name('profile');
//Route::match(['get', 'post'], '/dashboard', function(){
    //return view('dashboard');
//});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::group(['middleware' => 'auth:sanctum'], function (){
    //Route::get('dashboard', App\Http\Livewire\Dashboard::class)->name('profile');
    Route::get('users', App\Http\Livewire\User\UserList::class)->name('users')->middleware('can:administrador.read');
    Route::get('users/{user}/edit', App\Http\Livewire\User\UserEdit::class)->name('users.edit')->middleware('can:administrador.update');
    Route::get('roles', App\Http\Livewire\User\RoleList::class)->name('roles')->middleware('can:administrador.read');
    Route::get('settings/{setting}', App\Http\Livewire\AppSetting::class)->name('settings')->middleware('can:administrador.read');
});
