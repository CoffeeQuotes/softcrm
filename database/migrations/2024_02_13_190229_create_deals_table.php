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
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->morphs('lead_type');
            $table->decimal('deal_value', $precision = 8, $scale = 2);
            $table->foreignId('pipeline_id');
            $table->foreignId('pipeline_stage_id');
            $table->date('expecting_closing_date');
            $table->foreignId('user_id');
            $table->enum('status', ['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deals');
    }
};
