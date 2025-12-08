<?php

namespace App\Console\Commands;

use App\Mail\WeeklyNewsletter;
use App\Models\User;
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
            $this->info('Weekly email sending process started...');

            $recipientEmail = 'kunszt.norbert@gmail.com';
            $user = new User(['name' => 'Test user']);

            Mail::to($recipientEmail)->send(new WeeklyNewsletter($user));

            $this->info('Weekly email sending process finished.');
            Log::info('Weekly email sent successfully!'); // Írjunk egy sikeres bejegyzést is a logba

            return self::SUCCESS; 
        } catch (Throwable $e) {
            $this->error('An error occurred: ' . $e->getMessage());
            Log::error('Error in SendWeeklyEmail command: ' . $e->getMessage());
            Log::error($e->getTraceAsString()); // Beírjuk a teljes hibaláncot is

            return self::FAILURE; 
        }
    }
}