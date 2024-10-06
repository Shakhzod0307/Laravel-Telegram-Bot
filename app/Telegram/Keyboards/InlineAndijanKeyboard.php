<?php

namespace App\Telegram\Keyboards;
class InlineAndijanKeyboard
{
    public function getKeyboard()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'Andijan'], ['text' => 'Bukhara']],
                [['text' => 'Tashkent'],['text'=>'⬅️Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
}
