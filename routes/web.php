<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Telegram\Bot\Laravel\Facades\Telegram;
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
    $response = Telegram::getMe();
    $botId = $response->getId();
    $firstName = $response->getFirstName();
    $username = $response->getUsername();
    echo $botId . '<br />' . $firstName . '<br />' . $username;
});

Route::resource('users', UserController::class)
->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/VwwX4WZmxgFtJB8SBcUZm18j95qv8CgVwImxhmZwpbkiKYjfkTjMPqRzbMPWBHBp/webhook', function () {
    $update = Telegram::commandsHandler(true);
});

require __DIR__.'/auth.php';
