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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->date('issue_date');
            $table->date('due_date');
            $table->enum('paymentstatus', ['paid','unpaid'])->default('unpaid');
            $table->foreignId('deal_id');
            $table->decimal('price', $precision=8, $scale=2);
            $table->decimal('amount', $precision=8, $scale=2);
            $table->foreignId('tax_id');
            $table->enum('discount_type', ['fixed','percentage'])->default('fixed');
            $table->string('discount_value');
            $table->text('note')->nullable();
            $table->enum('status', ['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
