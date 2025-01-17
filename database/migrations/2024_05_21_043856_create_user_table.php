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
        Schema::create('user', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('username', 100)->nullable();
            $table->string('password', 100)->nullable();
            $table->uuid('user_role_id')->nullable(false);
            $table->string('email', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->uuid('lokasi_otmil_id')->nullable(false);
            $table->uuid('lokasi_lemasmil_id')->nullable(false);
            $table->boolean('is_suspended')->default(false);
            $table->uuid('petugas_id')->nullable(false);
            $table->string('image', 255)->nullable();
            $table->timestamp('last_login')->nullable();
            $table->date('expiry_date')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_role_id')->references('id')->on('user_role');
            $table->foreign('lokasi_otmil_id')->references('id')->on('lokasi_otmil');
            $table->foreign('lokasi_lemasmil_id')->references('id')->on('lokasi_lemasmil');
            $table->foreign('petugas_id')->references('id')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
