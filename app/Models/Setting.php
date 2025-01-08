<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    // Allow mass assignment for these fields
    protected $fillable = [
        'show_location',
        'show_logo',
        'show_images',
        'show_sizes',
        'show_spicy_vegan',
        'show_preparation_time',
        'show_search',
        'hero_text',
        'show_socials',
        'show_description',
        'category_colored_title',
        'facebook',
        'instagram',
        'whatsapp',
        'phone',
        'location',
        'show_lebanese_currency',
        'lebanese_currency',
        'show_sale'
    ];

    // Cast attributes to their respective data types
    protected $casts = [
        'show_location' => 'boolean',
        'show_logo' => 'boolean',
        'show_images' => 'boolean',
        'show_socials' => 'boolean',
        'show_sizes' => 'boolean',
        'show_sale' => 'boolean',
        'show_spicy_vegan' => 'boolean',
        'show_theme_switch' => 'boolean',
        'show_search' => 'boolean',
        'show_description' => 'boolean',
        'category_colored_title' => 'boolean',
        'show_lebanese_currency' => 'boolean',
        'lebanese_currency' => 'integer',
        'show_preparation_time' => 'boolean'
    ];
}
