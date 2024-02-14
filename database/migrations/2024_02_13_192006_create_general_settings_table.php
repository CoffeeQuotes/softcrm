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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            // Company Info
            $table->string('name');
            $table->string('company_icon')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_banner')->nullable();
            $table->string('lang')->default('english');
            

            // Date & Time Setting
            $table->enum('date_format', ['d-m-Y', 'm-d-Y','Y-m-d','m/d/Y','d/m/Y','Y/m/d','m.d.Y','d.m.Y','Y.m.d'])->default('d-m-Y');
            $table->enum('time_format',[12,24])->default(12);
            $table->string('timezone')->nullable();

            // Currency Setting 
            $table->string('currency_symbol')->nullable();
            $table->enum('decimal_separator',['.',','])->default('.');
            $table->enum('thousand_separator',['.',',','space'])->default(',');
            $table->enum('number_of_decimal',[0,2])->default(2);
            $table->enum('currency_position',['prefix_only','prefix_with_space','suffix_only','suffix_with_space'])->default('prefix_only');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
