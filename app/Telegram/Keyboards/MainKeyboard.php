<?php

namespace App\Telegram\Keyboards;

class MainKeyboard
{
    public function getKeyboard()
    {
        return json_encode([
            'keyboard' => [
                [['text' => '📆Ramazon taqvimi'], ['text' => '🕍Namoz vaqtlari']],
                [['text' => "🤲Ro'za tutish duosi"],['text'=>'🤲Namozdan keyingi zikrlar']],
                [['text'=>'📚Bot haqida']]
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }

}


