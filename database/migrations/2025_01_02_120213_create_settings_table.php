<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('show_location')->default(true);
            $table->boolean('show_logo')->default(true);
            $table->boolean('show_images')->default(true);
            $table->boolean('show_socials')->default(true);
            $table->boolean('show_preparation_time')->default(true);
            $table->boolean('show_search')->default(true);
            $table->boolean('show_sale')->default(true);
            $table->boolean('show_sizes')->default(true);
            $table->boolean('show_spicy_vegan')->default(true);
            $table->boolean('show_description')->default(true);
            $table->boolean('category_colored_title')->default(true);
            $table->string("facebook")->nullable()->default("fryjays");
            $table->string("instagram")->nullable()->default("https://www.instagram.com/fryjays_");
            $table->string("whatsapp")->nullable()->default("+96171387946");
            $table->string("phone")->nullable()->default("+96171387946");
            $table->string("hero_text")->nullable()->default("EVERY DAY IS A FRYDAY");
            $table->string("location")->nullable()->default("fryjays");
            $table->boolean('show_lebanese_currency')->default(true);
            $table->integer("lebanese_currency")->nullable()->default(100000);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
