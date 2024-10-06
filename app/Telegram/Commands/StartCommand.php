<?php


namespace App\Telegram\Commands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Laravel\Facades\Telegram;
class StartCommand
{

    public function execute($chatId)
    {
        $keyboard = (new \App\Telegram\Keyboards\MainKeyboard)->getKeyboard();
        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "Assalomu Alaykum\n<b>Ramadan Taqvimi</b> 2️⃣0️⃣2️⃣4️⃣  botiga xush kelibsiz\nKerakli bo'limni  tanlang!",
            'parse_mode' => 'HTML',
            'reply_markup' =>$keyboard,
        ]);
    }
}
