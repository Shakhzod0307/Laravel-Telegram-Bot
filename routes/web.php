<?php

use App\Http\Controllers\TelegramController;
use Illuminate\Support\Facades\Route;

use Telegram\Bot\Laravel\Facades\Telegram;

Route::get('/', function () {
    return view('welcome');
});


Route::get('set-webhook',function (){
    $response = Telegram::setWebhook(['url' => 'https://7379-37-110-215-63.ngrok-free.app/api/telegram/webhook']);
});


