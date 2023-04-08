<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

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
Route::get('/sendEmail', [EmailController::class, 'sendEmail'] );
Route::get('/test', function () {   
    $response = Http::post(config('app.api_email'), [
        'email' => 'lawlieth404@gmail.com',
        'subject' => 'Test email',
        'message' => 'This is a test email',
        'token' => config('app.api_token'),
    ]);
    
    return $response;
});
