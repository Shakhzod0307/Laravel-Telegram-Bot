<?php

namespace App\Telegram\Commands;
use App\Telegram\Keyboards\Shaharlar;
use App\Telegram\Keyboards\Viloyatlar;
use Telegram\Bot\Laravel\Facades\Telegram;

class NamozVaqtlariCommand
{

    public function execute($chatId)
    {
        $keyboard = (new Viloyatlar())->getKeyboard();

        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "Kerakli Viloyatni tanlang!",
            'parse_mode' => 'HTML',
            'reply_markup' => $keyboard,
        ]);
    }
    public function Andijon($chatId)
    {
        $keyboard = (new Shaharlar())->andijon();
        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "Kerakli Shaharni tanlang!",
            'parse_mode' => 'HTML',
            'reply_markup' => $keyboard,
        ]);
    }
}
