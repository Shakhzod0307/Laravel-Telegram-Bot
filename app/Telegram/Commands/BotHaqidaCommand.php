<?php

namespace App\Telegram\Commands;

use App\Telegram\Keyboards\MainKeyboard;
use Telegram\Bot\Laravel\Facades\Telegram;

class BotHaqidaCommand
{
    public function execute($chatId)
    {

        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "👨🏻‍💻 Loyiha asoschisi  — Shahzod Rashidov\n
             📜 Ma'lumotlar: \n
             ➖<a href='https://islom.uz'>islom.uz</a> \n
             ➖<a href='https://namozvaqti.uz'>namozvaqti.uz</a>\n
             sahifalaridan olindi \n
             📩 Murojaatlar uchun — @Shahzod_0109",
            'parse_mode' => 'HTML',
            'reply_markup' =>  (new MainKeyboard())->getKeyboard(),
        ]);
    }
}
