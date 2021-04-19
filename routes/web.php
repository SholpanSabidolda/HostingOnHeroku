<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\FileUploadController;
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


Route::get('/',[SmsController::class,'index']);
 Route::get('Ourachievements',[SmsController::class,'Ourachievements']); 
  Route::get('contact','App\Http\Controllers\EmailController@create'); 
  Route::post('/email', 'App\Http\Controllers\EmailController@sendEmail')->name('send.email');
  Route::get('Payment',[SmsController::class,'Payment']); 
    Route::get('Products',[SmsController::class,'Products']); 
  Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
Route::post('file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');