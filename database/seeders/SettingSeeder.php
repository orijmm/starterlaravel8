<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Settings
        $setting = new Setting();
        $setting->name_company = 'Company test';
        $setting->description = 'description';
        $setting->address = 'address';
        $setting->phone = '56952989898';
        $setting->email = 'email@email.com';
        $setting->locale = 'en';
        $setting->timezone = 'UTC';
        $setting->state_id = 784;
        $setting->city_id = 18184;
        $setting->country_id = 45;
        $setting->currency_id = 45;
        $setting->save();
    }
}
