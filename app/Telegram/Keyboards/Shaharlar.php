<?php

namespace App\Telegram\Keyboards;

use Telegram\Bot\Keyboard\Keyboard;

class Shaharlar
{
    public static function getShaharlar()
    {
        return [
            'andijon','xonobod','xojaobod','asaka','marhamat','paytug','boston','buxoro', 'jondor', 'qorakol',
            'gijduvon', 'gazli', 'fargona', 'qoqon', 'margilon', 'quva', 'rishton', 'bogdod', 'oltiariq', 'jizzax', 'zomin',
            'forish', 'gallaorol', 'termiz', 'boysun', 'denov', 'sherobod', 'shorchi', 'namangan', 'chortoq', 'chust', 'pop1',
            'uchqorgon', 'mingbuloq', 'navoiy', 'zarafshon', 'konimex', 'nurota', 'uchquduq', 'qarshi', 'dehqonobod',
            'muborak', 'shahrisabz', 'guzor', 'sirdaryo', 'guliston', 'sardoba', 'boyovut', 'paxtaobod', 'samarqand', 'ishtixon',
            'mirbozor', 'kattaqorgon', 'urgut', 'nukus', 'moynoq', 'taxtakopir', 'tortkol', 'qongirot', 'urganch', 'hazorasp', 'xonqa',
            'yangibozor', 'shovot', 'tashkent', 'angren',
            'piskent', 'bekobod', 'parkent', 'gazalkent', 'olmaliq', 'boka', 'yangiyol', 'nurafshon',
        ];
    }


    public function andijon()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'andijon'], ['text' => 'xonobod']],
                [['text' => 'xojaobod'], ['text' => 'asaka']],
                [['text' => 'marhamat'], ['text' => 'paytug']],
                [['text' => 'boston'], ['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
    public function buxoro()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'buxoro'], ['text' => 'jondor']],
                [['text' => 'qorakol'], ['text' => 'gijduvon']],
                [['text' => 'gazli'],['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
    public function fargona()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'fargona'], ['text' => 'qoqon']],
                [['text' => 'margilon'], ['text' => 'quva']],
                [['text' => 'rishton'], ['text' => 'bogdod']],
                [['text' => 'oltiariq'], ['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
    public function jizzax()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'jizzax'], ['text' => 'zomin']],
                [['text' => 'forish'], ['text' => 'gallaorol']],
                [['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
    public function surxondaryo()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'termiz'], ['text' => 'boysun']],
                [['text' => 'denov'], ['text' => 'sherobod']],
                [['text' => 'shorchi'], ['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
    public function namangan()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'namangan'], ['text' => 'chortoq']],
                [['text' => 'chust'], ['text' => 'pop1']],
                [['text' => 'uchqorgon'], ['text' => 'mingbuloq']],
                [['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
    public function navoiy()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'navoiy'], ['text' => 'zarafshon']],
                [['text' => 'konimex'], ['text' => 'nurota']],
                [['text' => 'uchquduq'], ['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
    public function qashqadaryo()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'qarshi'], ['text' => 'dehqonobod']],
                [['text' => 'muborak'], ['text' => 'shahrisabz']],
                [['text' => 'guzor'],['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
    public function sirdaryo()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'sirdaryo'], ['text' => 'guliston']],
                [['text' => 'sardoba'], ['text' => 'boyovut']],
                [['text' => 'paxtaobod'], ['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
    public function samarqand()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'samarqand'], ['text' => 'ishtixon']],
                [['text' => 'mirbozor'], ['text' => 'kattaqorgon']],
                [['text' => 'urgut'], ['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
    public function qoraqalpogiston()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'nukus'], ['text' => 'moynoq']],
                [['text' => 'taxtakopir'], ['text' => 'tortkol']],
                [['text' => 'qongirot'], ['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
    public function xorazm()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'urganch'], ['text' => 'hazorasp']],
                [['text' => 'xonqa'], ['text' => 'yangibozor']],
                [['text' => 'shovot'],['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
    public function toshkent()
    {
        return json_encode([
            'keyboard' => [
                [['text' => 'toshkent'], ['text' => 'angren']],
                [['text' => 'piskent'], ['text' => 'bekobod']],
                [['text' => 'parkent'], ['text' => 'gazalkent']],
                [['text' => 'olmaliq'], ['text' => 'boka']],
                [['text' => 'yangiyol'], ['text' => 'nurafshon']],
                [['text'=>'⬅️ Orqaga']],
            ],
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
        ]);
    }
}
