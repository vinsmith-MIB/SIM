<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('id');
            $table->string('invoice_number')->unique();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_produk');
            $table->integer('jumlah');
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_produk')->references('id')->on('produks')->onDelete('cascade');
            $table->decimal('total_amount', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
