<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Component;

class Settings extends Component
{

    public $show_location;
    public $show_logo;
    public $show_images;
    public $show_socials;
    public $show_sizes;
    public $show_sale;
    public $show_spicy_vegan;
    public $show_preparation_time;
    public $show_search;
    public $hero_text;
    public $show_description;
    public $category_colored_title;
    public $facebook;
    public $instagram;
    public $whatsapp;
    public $phone;
    public $location;
    public $show_lebanese_currency;
    public $lebanese_currency;

    public function mount()
    {
        // Load the current settings
        $settings = Setting::first();

        // Initialize the component properties with the values from the settings table
        $this->show_location = $settings->show_location;
        $this->show_logo = $settings->show_logo;
        $this->show_images = $settings->show_images;
        $this->show_socials = $settings->show_socials;
        $this->show_sizes = $settings->show_sizes;
        $this->show_sale = $settings->show_sale;
        $this->show_spicy_vegan = $settings->show_spicy_vegan;
        $this->show_preparation_time = $settings->show_preparation_time;
        $this->show_search = $settings->show_search;
        $this->show_description = $settings->show_description;
        $this->category_colored_title = $settings->category_colored_title;
        $this->facebook = $settings->facebook;
        $this->instagram = $settings->instagram;
        $this->whatsapp = $settings->whatsapp;
        $this->phone = $settings->phone;
        $this->hero_text = $settings->hero_text;
        $this->location = $settings->location;
        $this->show_lebanese_currency = $settings->show_lebanese_currency;
        $this->lebanese_currency = $settings->lebanese_currency;
    }

    public function saveSettings()
    {
        $this->validate([
            "lebanese_currency" => 'required|numeric'
        ]);

        Setting::first()->update([
            'show_location' => $this->show_location,
            'show_logo' => $this->show_logo,
            'show_images' => $this->show_images,
            'show_socials' => $this->show_socials,
            'show_sizes' => $this->show_sizes,
            'show_sale' => $this->show_sale,
            'show_spicy_vegan' => $this->show_spicy_vegan,
            'show_preparation_time' => $this->show_preparation_time,
            'show_search' => $this->show_search,
            'show_description' => $this->show_description,
            'category_colored_title' => $this->category_colored_title,
            'facebook' => $this->facebook ?: null,
            'instagram' => $this->instagram ?: null,
            'whatsapp' => $this->whatsapp ?: null,
            'phone' => $this->phone ?: null,
            'hero_text' => $this->hero_text ?: null,
            'location' => $this->location ?: null,
            'show_lebanese_currency' => $this->show_lebanese_currency,
            'lebanese_currency' => $this->lebanese_currency,
        ]);

        session()->flash('message', 'Settings updated successfully!');
    }

    public function render()
    {
        return view('livewire.settings');
    }
}



