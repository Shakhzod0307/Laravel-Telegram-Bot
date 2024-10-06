<?php

namespace App\Telegram\Commands;

use App\Telegram\Keyboards\MainKeyboard;
use Illuminate\Support\Facades\Storage;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;

class DuoCommand
{
    public function execute($chatId)
    {
        $image =public_path('images/Duo.jpg');
        Telegram::sendPhoto([
            'chat_id' => $chatId,
            'photo'=>InputFile::create($image, 'image.jpg'),
            'caption' => "<b>Ro'za tutish duosi\n (saharlik, og'iz yopish)</b>\n\n Navaytu an asuma sovma shahri Ramazona minai fajri ilal mag'ribi, xolisan lillahi ta'ala Allohu akbar.\n
             <i>Ma'nosi:\n Ramazon oyining ro'zasini subhdan to kun botguncha tutmoqni niyat qildim. Xolis Alloh uchun Alloh buyukdir.</i>\n
             <b>Iftorlik duosi (og'iz ochish)\n</b>Allohumma laka sumtu va bika amantu va a'layka tavakkaltu va a'la rizqika aftartu, fag'firliy ma qoddamtu va maa axxortu birohmatika yaa arhamar roohimiyn.\n
             <i>Ma'nosi:\n Ey Alloh, ushbu Ro'zamni Sen uchun tutdim va Senga iymon keltirdim va Senga tavakkal qildim. Ey mehribonlarning eng mehriboni, mening avvalgi va keyingi gunohlarimni mag'firat qilgin.</i>",
            'parse_mode' => 'HTML',
            'reply_markup' =>  (new MainKeyboard())->getKeyboard(),
        ]);

    }
}
