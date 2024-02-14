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
        Schema::create('email_setups', function (Blueprint $table) {
            $table->id();
            $table->enum('supported_mail_service', [NULL, 'Amazon SES', 'Mailgun', 'SMTP', 'Sendmail'])->default(NULL);
            $table->string('email_sent_from_name');
            $table->string('email_sent_from_email');

            // Additional columns (Amazon SES)
            $table->string('hostname')->nullable();
            $table->string('access_key_id')->nullable();
            $table->string('secret_access_key')->nullable();
            $table->string('region')->nullable();

            // Addition columns (Mailgun)
            $table->string('domain_name')->nullable();
            $table->string('api_key')->nullable();

            // Additional columns (SMTP)
            $table->string('username')->nullable();
            $table->string('smtp_host')->nullable();
            $table->string('port')->nullable();
            $table->string('password_to_access')->nullable();
            $table->string('encryption_type')->nullable();

            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_setups');
    }
};
