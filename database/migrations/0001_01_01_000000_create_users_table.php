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
            $table->id();
            $table->string('full_name');
            $table->string('phone_number', 99);
            $table->text('address');
            $table->string('city')->nullable();
            $table->string('education_level')->nullable();
            $table->string('major')->nullable();
            $table->string('year_of_entry');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('picture_url')->nullable();
            $table->string('nik')->nullable();
            $table->string('gender')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('parent_occupation')->nullable();
            $table->string('school_name')->nullable();
            $table->string('year_of_graduation')->nullable();
            $table->string('latest_gpa')->nullable();
            $table->string('student_id_card')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('transkrip_nilai_terakhir')->nullable();
            $table->string('ijazah_terakhir')->nullable();
            $table->string('portofolio')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
