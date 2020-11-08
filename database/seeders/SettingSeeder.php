<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminDetail;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'email' => 'info@thebandf3.com',
            'booking' => 'booking@thebandf3.com',
            'bandprofile' => 'A',
            'fbLink' => '',
            'instaLink' => '',
            'ytLink' => '',
            'contact' => ''
        ]);
    }
}