<?php

namespace App\Telegram\Commands;
use App\Services\PrayerTimeService;
use App\Telegram\Keyboards\Shaharlar;
use App\Telegram\Keyboards\Viloyatlar;
use Telegram\Bot\Laravel\Facades\Telegram;

class NamozVaqtlariCommand
{

    public function execute($chatId)
    {
        $keyboard = (new Viloyatlar())->getKeyboard();

        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "Kerakli Viloyatni tanlang!",
            'parse_mode' => 'HTML',
            'reply_markup' => $keyboard,
        ]);
    }


    public function viloyat($key, $chatId)
    {
        $keyboard = (new Shaharlar())->$key();
        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "Kerakli Shaharni tanlang!",
            'parse_mode' => 'HTML',
            'reply_markup' => $keyboard,
        ]);
    }
    public function shaharlar($shahar, $chatId)
    {
        $prayerTimeService = new PrayerTimeService();
        try {
            $times = [
                'bomdod' => $prayerTimeService->getPrayerTime($shahar, 0),
                'quyosh' => $prayerTimeService->getPrayerTime($shahar, 1),
                'peshin' => $prayerTimeService->getPrayerTime($shahar, 2),
                'asr' => $prayerTimeService->getPrayerTime($shahar, 3),
                'shom' => $prayerTimeService->getPrayerTime($shahar, 4),
                'xufton' => $prayerTimeService->getPrayerTime($shahar, 5),
                'bugun' => $prayerTimeService->getToday($shahar),
                'hozirgi' => $prayerTimeService->getCurrentTime($shahar),
            ];
            Telegram::sendMessage([
                'chat_id' => $chatId,
                'text' => $shahar,
                'parse_mode' => 'HTML',
            ]);
            return response()->json($times);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }


    }
}
