<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('demo_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('hotel_name');
            $table->string('hotel_type')->nullable(); // hotel, resort, homestay, etc.
            $table->integer('number_of_rooms')->nullable();
            $table->string('city');
            $table->text('message')->nullable();
            $table->string('preferred_date')->nullable();
            $table->string('preferred_time')->nullable();
            $table->enum('status', ['pending', 'contacted', 'completed', 'rejected'])->default('pending');
            $table->text('admin_notes')->nullable();
            $table->string('ip_address')->nullable();
            $table->timestamps();

            $table->index(['email', 'status']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('demo_requests');
    }
};
