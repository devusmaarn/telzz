<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->unsignedInteger('wallet');
            $table->unsignedInteger('commission');
            $table->string('phone_number')->nullable()->unique();
            $table->string('referer')->nullable();
            $table->string('email')->unique();
            $table->string('type');
            $table->string('role');
            $table->integer('status');
            $table->string('password');
            $table->timestamp('phone_number_verified_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
