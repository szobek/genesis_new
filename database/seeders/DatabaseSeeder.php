<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Msg;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Ad::truncate();
        Ad::factory(4)->create();

        $this->call([
            AdsTableSeeder::class,
        ]);
    }
}
