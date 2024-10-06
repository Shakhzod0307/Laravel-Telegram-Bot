<?php
namespace App\Telegram\Commands;

use App\Telegram\Keyboards\ZikrlarKeyboard;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;

class ZikrlarCommand
{

    public function execute($chatId)
    {
        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "Kerakli Bo'limni tanlang!",
            'parse_mode' => 'HTML',
            'reply_markup' => (new ZikrlarKeyboard())->getKeyboard(),
        ]);
    }
    public function zikrlar($chatId)
    {
        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "<b>NAMOZDAN KEYINGI ZIKRLAR</b>\n
             Namoz salom bilan tugaydi. Salomdan keyingi amallar <b>(tasbehotu duolar)</b> majburiy emas, ammo nihoyatda savoblidir.\n
             Farz namozlaridan keyin quyidagi duoni o'qish sunnatdir:\n
             <b>Allohumma antas-salam va minkas-salam, Taborakta ya zaljalali val ikrom.</b>\n
             <i>Mazmuni:</i> Ey Allohim, Sen barcha ayb-nuqsonlardan poksan. Barcha  salomatlik va rahmat Sendandir. Ey azamat va qudrat egasi bo'lgan Allohim, Sening shoning ulug'dir.\n
             Umuman, har namozni tugatgandan so'ng <b>Oyatal Kursi</b> o'qilsa savobi ulug' bo'ladi. ",
            'parse_mode' => 'HTML',
            'reply_markup' =>(new ZikrlarKeyboard())->getKeyboard(),
        ]);
    }
    public function oyatalKursi($chatId)
    {
        $audio = public_path("images/Ayatul kursi duosi o'qilishi.mp3");
        Telegram::sendAudio([
            'chat_id' => $chatId,
            'audio'=>InputFile::create($audio, 'Oyatal kursiy.mp3'),
            'caption' =>"<b>OYATAL KURSIY</b>\n\n
             <b>A'uzi billahi minash-shaytonir rojiym. Bismillahir rohmanir rohiym.</b>\n
             <b>«Allohu laa ilaaha illa huval Hayyul Qoyyuum. Laa ta'xuzuhu cinatuv va laa navm. Lahuu maa fis-samaavaati va maa fil ard. Man‑zallazii yashfa'u 'indahu illaa bi‑iznih. Ya'lamu maa bayna aydiyhim va maa xolfahum va laa yuhituuna bishay'im‑min 'ilmihii illaa bima shaa-a. Vasi'a kursiyyuuhus-samaavaati val‑ard. Va laa yauduhu hifzuhumaa va huval 'aliyyul 'aziym»</b>\n
             <i>Mazmuni:</i>\n
             <i>Alloh – Undan o‘zga iloh yo‘q. U Hayy va Qayyumdir. Uni mudroq ham, uyqu ham olmas. Osmonlaru yerdagi narsalar Unikidir. Uning huzurida O‘zining iznisiz hеch kim shafoat qila olmas. Ularning oldilaridagi narsani ham, ortlaridagi narsani ham bilur. Uning ilmidan O‘zi xohlaganidan boshqa hеch narsani ihota qila olmaslar. Uning Kursisi osmonlaru yerni qamragan.  Ularni muhofaza qilish unga og‘ir kеlmas. Va U Aliy va Aziymdir.</i>",
            'parse_mode' => 'HTML',
            'reply_markup' => (new ZikrlarKeyboard())->getKeyboard(),
        ]);
    }
    public function tasbeh($chatId)
    {
        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "TASBEH\n
             <b>Subhanalloh (33 marta)</b>\n
             <b>Alhamdulillah (33 marta)</b>\n
             <b>Allohu akbar (33 marta)</b>",
            'parse_mode' => 'HTML',
            'reply_markup' => (new ZikrlarKeyboard())->getKeyboard(),
        ]);
    }
    public function tavhid($chatId)
    {
        Telegram::sendMessage([
            'chat_id' => $chatId,
            'text' => "<b>KALIMAI TAVHID</b>\n
             <b>«Ashhadu allaa ilaaha illallohu vahdahu laa sharika lah, lahul mulku va lahul hamd, yuhyii va yumiyt va huva hayyul laa yamuut, biyadihil xoyr va huva 'alaa kulli shay'in qodiyr».</b>\n
             <i>Mazmuni:</i>\n
             <i>Allohdan o‘zga iloh yo‘qligiga guvohlik bеraman. Allohning shеrigi yo‘qdir, barcha mulk Unikidir, maqtovlar Ungadir, U tiriltiradi va o‘ldiradi, ammo O‘zi tirikdir, o‘lmaydi. Yaxshilik Uning ixtiyoridadir va U hamma narsaga qodirdir.</i>",
            'parse_mode' => 'HTML',
            'reply_markup' => (new ZikrlarKeyboard())->getKeyboard(),
        ]);
    }
}
