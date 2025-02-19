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
        Schema::create('apply_beasiswas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('beasiswa_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('beasiswa_id')->references('id')->on('beasiswas');
            $table->timestamps();

            $table->unique(['user_id', 'beasiswa_id'], 'user_beasiswa_unique');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_beasiswas');
    }
};
