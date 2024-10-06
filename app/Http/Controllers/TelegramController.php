<?php

namespace App\Http\Controllers;

use App\Telegram\Commands\MenyuCommand;
use App\Telegram\Commands\NamozVaqtlariCommand;
use App\Telegram\Commands\StartCommand;
use App\Telegram\Commands\TaqvimCommand;
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
                if ($messageText === '📆Ramazon taqvimi'){
                    (new TaqvimCommand())->execute($chatId);
                };;
                if ($messageText === 'Andijan'){
                    (new TaqvimCommand())->andijon($chatId);
                };
                if ($messageText === '🕍Namoz vaqtlari'){
                    (new NamozVaqtlariCommand())->execute($chatId);
                };
                if ($messageText === '🤲Duo'){
                    (new TaqvimCommand())->execute($chatId);
                };
                if ($messageText === '🤲Namozdan keyingi zikrlar'){
                    (new TaqvimCommand())->execute($chatId);
                };
                if ($messageText === '📚Bot haqida'){
                    (new TaqvimCommand())->execute($chatId);
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
