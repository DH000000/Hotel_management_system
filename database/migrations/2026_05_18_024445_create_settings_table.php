<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('type')->default('text');
            $table->string('group')->default('general');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Insert default settings
        DB::table('settings')->insert([
            ['key' => 'site_name', 'value' => 'TripLodge Universe', 'group' => 'general', 'created_at' => now()],
            ['key' => 'site_email', 'value' => 'support@triplodge.com', 'group' => 'general', 'created_at' => now()],
            ['key' => 'site_phone', 'value' => '+91 1800 123 4567', 'group' => 'general', 'created_at' => now()],
            ['key' => 'site_address', 'value' => 'Gurugram, Haryana', 'group' => 'general', 'created_at' => now()],
            ['key' => 'company_name', 'value' => 'TripLodge Universe Pvt Ltd', 'group' => 'company', 'created_at' => now()],
            ['key' => 'gst_number', 'value' => '06AAACA1234F1Z', 'group' => 'company', 'created_at' => now()],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
