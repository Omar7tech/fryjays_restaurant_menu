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
            'show_socials' => true,
            'show_preparation_time' => true,
            'show_search' => true,
            'show_sale' => true,
            'show_sizes' => true,
            'show_spicy_vegan' => true,
            'show_description' => true,
            'category_colored_title' => true,
            'facebook' => 'fryjays',
            'instagram' => 'https://www.instagram.com/fryjays_',
            'whatsapp' => '+96171387946',
            'phone' => '+96171387946',
            'hero_text' => 'EVERY DAY IS A FRYDAY',
            'location' => 'fryjays',
            'show_lebanese_currency' => true,
            'lebanese_currency' => 100000,
        ]);
    }
}
