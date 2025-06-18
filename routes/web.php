<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthController;

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




Route::get('/',[AuthController::class,'login'])->name('AuthLogin');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    Route::get('/exclup',[DashboardController::class,'exclup'])->name('exclup');
    Route::get('/excle_list',[DashboardController::class,'excleList'])->name('excle_list');
    Route::post('/import', [DashboardController::class, 'import'])->name('employees.import');
    Route::get('/excle_list_edit',[DashboardController::class,'excleListEdit'])->name('excle_list_edit');

    Route::post('/update-cell', [DashboardController::class, 'updateCell']);

    Route::get('/excle_list_show',[DashboardController::class,'excleListShow'])->name('excle_list_show');
    Route::delete('/delete-all', [DashboardController::class, 'deleteAll'])->name('delete_all_data');


    Route::resource('/url-stories',DashboardController::class);

    Route::post('/url-status/{id}',[DashboardController::class,'UrlStatus'])->name('UrlStatus');
    Route::get('{shortLink}',[DashboardController::class,'redirectToOriginal'])->name('redirectToOriginal');


});
