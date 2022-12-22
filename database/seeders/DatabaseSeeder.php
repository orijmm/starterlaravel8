<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Nnjeim\World\Actions\SeedAction;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            WorldSeeder::class,
            UserSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
