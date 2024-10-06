<?php

namespace App\Telegram\Commands;
use App\Telegram\Keyboards\InlineAndijanKeyboard;
use App\Telegram\Keyboards\RegionKeyboard;
use Telegram\Bot\Laravel\Facades\Telegram;


class TaqvimCommand
{

    public function execute($chatId)
    {
        $keyboardT = (new RegionKeyboard)->getKeyboard();

        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "Kerakli Tumanni tanlang!",
//            'parse_mode' => 'HTML',
            'reply_markup' => $keyboardT,
        ]);
    }
    public function andijon($chatId)
    {
        $keyboardI = (new InlineAndijanKeyboard())->getKeyboard();
        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "Kerakli Tumanni tanlang!",
//            'parse_mode' => 'HTML',
            'reply_markup' =>  $keyboardI,
        ]);
    }
}
