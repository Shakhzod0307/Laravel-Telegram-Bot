<?php

namespace App\Telegram\Keyboards;

class RegionKeyboard
{
    public function getKeyboard()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'Andijan'], ['text' => 'Bukhara']],
                [['text' => 'Fergana'],['text'=>'Jizzakh']],
                [['text' => 'Namangan'],['text'=>'Navoiy']],
                [['text' => 'Qarshi'],['text'=>'Samarkand']],
                [['text' => 'Guliston'],['text'=>'Termez']],
                [['text' => 'Nurafshon'],['text'=>'Urgench']],
                [['text' => 'Tashkent'],['text'=>'⬅️Bosh Menyu']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
}
