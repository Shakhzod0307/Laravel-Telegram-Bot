<?php

namespace App\Telegram\Keyboards;

class Viloyatlar
{
    public function getKeyboard()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'Andijon viloyati'], ['text' => 'Buxoro viloyati']],
                [['text' => "Farg'ona viloyati"],['text'=>'Jizzax viloyati']],
                [['text' => 'Namangan viloyati'],['text'=>'Navoiy viloyati']],
                [['text' => 'Surxondaryo viloyati'],['text'=>'Samarkand viloyati']],
                [['text' => 'Sirdaryo viloyati'],['text'=>'Xorazm viloyati']],
                [['text' => 'Qashqadaryo viloyati'],['text'=>'Toshkent viloyati']],
                [['text' => "Qoraqalpog'iston Respublikasi"],['text'=>'⬅️Bosh Menyu']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
}
