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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->enum('activity',['call','meeting','email','task','deadline','other'])->default('call');
            $table->string('title');
            $table->text('description');
            $table->date('schedule_start_date');
            $table->time('schedule_start_time', $precision = 0);
            $table->date('schedule_end_date');
            $table->time('schedule_end_time', $precision = 0);
            $table->morphs('activity_type');
            $table->json('participants');
            $table->json('collaborators');
            $table->dateTime('set_remainder', $precision = 0)->nullable();
            $table->boolean('save_as_done')->default(false);
            $table->enum('status', ['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
