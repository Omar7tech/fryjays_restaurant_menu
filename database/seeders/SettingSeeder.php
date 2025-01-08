<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run()
    {
        Setting::create([
            'show_location' => true,
            'show_logo' => true,
            'show_images' => true,
        ]);
    }
}
