<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->unique();
            $table->string('alternate_phone')->nullable();
            $table->string('profile_photo')->nullable();
            $table->enum('role', ['super_admin', 'admin', 'hotel_owner', 'staff', 'guest'])->default('guest');
            $table->foreignId('hotel_id')->nullable();
            $table->enum('status', ['active', 'inactive', 'suspended', 'pending'])->default('pending');
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->integer('login_count')->default(0);
            $table->boolean('two_factor_enabled')->default(false);
            $table->json('preferences')->nullable();
            $table->string('language')->default('en');
            $table->string('timezone')->default('Asia/Kolkata');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
