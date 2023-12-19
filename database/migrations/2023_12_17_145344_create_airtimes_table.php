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
        Schema::create('airtimes', function (Blueprint $table) {
            $table->id();
            $table->string('service_id')->unique();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('company_id')->unique();
            $table->unsignedFloat('discount');
            $table->string('name')->nullable();
            $table->unsignedFloat('price');
            $table->string('bonus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airtimes');
    }
};
