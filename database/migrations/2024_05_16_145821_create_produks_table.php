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
    Schema::create('produks', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_kategori')->constrained('kategoris')->onDelete('cascade');
        $table->string('nama_produk');
        $table->text('produk_seo');
        $table->integer('harga');
        $table->integer('stok');
        $table->string('satuan');
        $table->string('gambar');
        $table->string('dibeli');
        $table->integer('diskon');
        $table->string('keterangan');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
