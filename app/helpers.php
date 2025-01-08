<?php
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

// Get setting value
if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        $settings = Cache::remember('app_settings', 3600, function () {
            return Setting::first(); // Retrieve the single row
        });

        return $settings ? $settings->$key : $default;
    }
}

// Update setting value
if (!function_exists('set_setting')) {
    function set_setting($key, $value)
    {
        $settings = Setting::firstOrCreate([]);
        $settings->update([$key => $value]);

        Cache::forget('app_settings'); 
    }
}
