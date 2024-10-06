<?php


namespace App\Telegram\Commands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Laravel\Facades\Telegram;
class MenyuCommand
{

    public function execute($chatId)
    {
        $keyboard = (new \App\Telegram\Keyboards\MainKeyboard)->getKeyboard();
        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "Kerakli bo'limni  tanlang!",
            'parse_mode' => 'HTML',
            'reply_markup' =>$keyboard,
        ]);
    }
}
