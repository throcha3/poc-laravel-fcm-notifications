<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, NotificationSendController};
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

Route::group(['middleware' => 'auth'],function(){
    Route::post('/store-token', [NotificationSendController::class, 'updateDeviceToken'])->name('store.token');
    Route::post('/send-web-notification', [NotificationSendController::class, 'sendNotificationToDevice'])->name('send.web-notification');
});

Route::get('/send-topic-notification', [NotificationSendController::class, 'sendNotificationToTopic'])->name('send.topic-notification');

Route::get('/home', [HomeController::class, 'index'])->name('home');