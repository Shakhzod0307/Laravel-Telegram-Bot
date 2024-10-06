<?php

namespace App\Telegram\Keyboards;

class ZikrlarKeyboard
{
    public function getKeyboard()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'Namozdan keyingi zikrlar'], ['text' => 'Oyatal Kursi']],
                [['text' => 'Tasbeh'],['text'=>'Kalimai Tavhid']],
                [['text'=>'⬅️Bosh Menyu']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
}
