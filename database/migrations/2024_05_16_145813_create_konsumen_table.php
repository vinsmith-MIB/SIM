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
        Schema::create('konsumens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_user');
            $table->text('alamat');
            $table->string('kota_asal');
            $table->string('kodepos');
            $table->string('telpon');
            $table->string('email');
            $table->string('password');
            $table->string('foto')->nullable();
            $table->foreignId('id_kota')->constrained('kotas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsumens');
    }
};
