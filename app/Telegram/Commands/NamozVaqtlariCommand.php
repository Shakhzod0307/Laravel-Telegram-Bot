<?php

namespace App\Telegram\Commands;
use Telegram\Bot\Laravel\Facades\Telegram;

class NamozVaqtlariCommand
{

    public function execute($chatId)
    {
        $keyboardT = (new \App\Telegram\Keyboards\RegionKeyboard)->getKeyboard();

        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "Kerakli Tumanni tanlang!",
            'parse_mode' => 'HTML',
            'reply_markup' => $keyboardT,
        ]);
    }
}
