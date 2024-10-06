<?php

namespace App\Http\Controllers;

use App\Telegram\Commands\BotHaqidaCommand;
use App\Telegram\Commands\DuoCommand;
use App\Telegram\Commands\MenyuCommand;
use App\Telegram\Commands\NamozVaqtlariCommand;
use App\Telegram\Commands\StartCommand;
use App\Telegram\Commands\TaqvimCommand;
use App\Telegram\Commands\ZikrlarCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Laravel\Facades\Telegram;


class TelegramController extends Controller
{
    public function handle(Request $request)
    {
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
                };
                if ($messageText === '📆Ramazon taqvimi'){
                    (new TaqvimCommand())->execute($chatId);
                };
                if ($messageText === '🕍Namoz vaqtlari'){
                    (new NamozVaqtlariCommand())->execute($chatId);
                };
                if ($messageText === '🤲Duo'){
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
                if ($messageText === 'Andijan'){
                    (new TaqvimCommand())->andijon($chatId);
                };

            }
        } catch (\Exception $exception) {
            report($exception);
            Log::error('exp', ['message' => $exception->getMessage()]);
            return response('error', 200);
        }
        return 'ok';
    }



}
