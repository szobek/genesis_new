<?php

namespace App\Console\Commands;

use App\Mail\WeeklyNewsletter;

use App\Models\Msg;
use App\Models\Tender;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log; // FONTOS: Add hozzá ezt a sort!
use Illuminate\Support\Facades\Mail;
use Throwable; // FONTOS: És ezt is!

class SendWeeklyEmail extends Command
{
    protected $signature = 'email:send-weekly';
    protected $description = 'Sends a weekly newsletter to users.';

    public function handle()
    {
       try {
            $this->info('Weekly email process started...');

            // Adatok lekérdezése az adatbázisból az elmúlt 7 napra
            $msgs = Msg::where('created_at', '>=', now()->subWeek())->get();
            $tenders = Tender::where('created_at', '>=', now()->subWeek())->get();

            // Címzett email címe
            $recipientEmail = 'kunszt.norbert@gmail.com';

            // Email küldése az adatokkal
            Mail::to($recipientEmail)->send(new WeeklyNewsletter($msgs, $tenders));

            $this->info('Weekly email process finished successfully.');
            Log::info('Weekly report email sent successfully!'); // Sikeres futás logolása

            return self::SUCCESS; // Sikeres futás jelzése (exit code 0)

        } catch (Throwable $e) {
            // Itt elkapjuk a VALÓDI hibát és beírjuk a logba
            $this->error('An error occurred during weekly email sending: ' . $e->getMessage());
            Log::error('--- ERROR IN SendWeeklyEmail COMMAND ---');
            Log::error('Message: ' . $e->getMessage());
            Log::error('File: ' . $e->getFile() . ' on line ' . $e->getLine());
            Log::error($e->getTraceAsString()); // Beírjuk a teljes hibaláncot is
            Log::error('------------------------------------');

            return self::FAILURE; // Sikertelen futás jelzése (exit code 1)
        }
    }
}
