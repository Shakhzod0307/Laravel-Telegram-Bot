<?php

namespace App\Http\Controllers;

use App\Telegram\Commands\BotHaqidaCommand;
use App\Telegram\Commands\DuoCommand;
use App\Telegram\Commands\MenyuCommand;
use App\Telegram\Commands\NamozVaqtlariCommand;
use App\Telegram\Commands\StartCommand;
use App\Telegram\Commands\TaqvimCommand;
use App\Telegram\Commands\ZikrlarCommand;
use App\Telegram\Keyboards\Shaharlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Laravel\Facades\Telegram;


class TelegramController extends Controller
{
    public function handle(Request $request)
    {
        $viloyatlar = [
            'andijon'=>'Andijon viloyati',
            'buxoro'=>'Buxoro viloyati',
            'fargona'=>"Farg'ona viloyati",
            'jizzax'=>'Jizzax viloyati',
            'namangan'=>'Namangan viloyati',
            'navoiy'=>'Navoiy viloyati',
            'surxondaryo'=>'Surxondaryo viloyati',
            'samarqand'=>'Samarkand viloyati',
            'sirdaryo'=>'Sirdaryo viloyati',
            'xorazm'=>'Xorazm viloyati',
            'qashqadaryo'=>'Qashqadaryo viloyati',
            'toshkent'=>'Toshkent viloyati',
            'qoraqalpogiston'=>"Qoraqalpog'iston Respublikasi",
        ];
        $cities = [
            'andijon', 'xonobod', 'xojaobod', 'asaka', 'marhamat', 'paytug', 'boston', 'buxoro', 'jondor', 'qorakol', 'gijduvon', 'gazli', 'fargona', 'qoqon', 'margilon', 'quva', 'rishton', 'bogdod', 'oltiariq', 'jizzax', 'zomin', 'forish', 'gallaorol', 'termiz', 'boysun', 'denov', 'sherobod',
            'shorchi', 'namangan', 'chortoq', 'chust', 'pop1', 'uchqorgon', 'mingbuloq', 'navoiy', 'zarafshon', 'konimex', 'nurota', 'uchquduq', 'qarshi', 'dehqonobod', 'muborak', 'shahrisabz', 'guzor', 'sirdaryo',
            'guliston', 'sardoba', 'boyovut', 'paxtaobod', 'samarqand', 'ishtixon', 'mirbozor', 'kattaqorgon', 'urgut', 'nukus', 'moynoq', 'taxtakopir', 'tortkol', 'qongirot', 'urganch', 'hazorasp', 'xonqa', 'yangibozor', 'shovot', 'toshkent', 'angren', 'piskent',
            'bekobod', 'parkent', 'gazalkent', 'olmaliq', 'boka', 'yangiyol', 'nurafshon',
        ];

        try {
            $telegramMessage = Telegram::getWebhookUpdates();
            if (isset($telegramMessage['message']['text'])) {
                $chatId = $telegramMessage['message']['chat']['id'];
                $messageText = $telegramMessage['message']['text'];
                if ($messageText === '/start') {
                    (new StartCommand())->execute($chatId);
                };
                if ($messageText === '⬅️Bosh Menyu'){
                    (new MenyuCommand())->execute($chatId);
                };
                if ($messageText === '⬅️Orqaga'){
                    (new TaqvimCommand())->execute($chatId);
                };if ($messageText === '⬅️ Orqaga'){
                    (new NamozVaqtlariCommand())->execute($chatId);
                };
                if ($messageText === '📆Ramazon taqvimi'){
                    (new TaqvimCommand())->execute($chatId);
                };
                if ($messageText === '🕍Namoz vaqtlari'){
                    (new NamozVaqtlariCommand())->execute($chatId);
                };
                if ($messageText === "🤲Ro'za tutish duosi"){
                    (new DuoCommand())->execute($chatId);
                };
                if ($messageText === '🤲Namozdan keyingi zikrlar'){
                    (new ZikrlarCommand())->execute($chatId);
                };
                if ($messageText === 'Namozdan keyingi zikrlar'){
                    (new ZikrlarCommand())->zikrlar($chatId);
                };
                if ($messageText === 'Oyatal Kursi'){
                    (new ZikrlarCommand())->oyatalKursi($chatId);
                };
                if ($messageText === 'Tasbeh'){
                    (new ZikrlarCommand())->tasbeh($chatId);
                };
                if ($messageText === 'Kalimai Tavhid'){
                    (new ZikrlarCommand())->tavhid($chatId);
                };
                if ($messageText === '📚Bot haqida'){
                    (new BotHaqidaCommand())->execute($chatId);
                };
                foreach ($viloyatlar as $key => $value) {
                    if ($messageText === $value) {
                        (new NamozVaqtlariCommand())->viloyat($key,$chatId);
                        break;
                    }
                }
                foreach ($cities as $shahar) {
                    if ($messageText === $shahar) {
                        (new NamozVaqtlariCommand())->shaharlar($shahar,$chatId);
                        break;
                    }
                }


            }
        } catch (\Exception $exception) {
            report($exception);
            Log::error('exp', ['message' => $exception->getMessage()]);
            return response('error', 200);
        }
        return 'ok';
    }



}
