<?php

namespace App\Telegram\Keyboards;
class InlineAndijanKeyboard
{
    public function getKeyboard()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'Andijon'], ['text' => 'Xonobod']],
                [['text' => "Xo'jaobod"], ['text' => 'Asaka']],
                [['text' => 'Marhamat'], ['text' => 'Poytug']],
                [['text' => "Bo'ston"],['text'=>'⬅️Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
}
