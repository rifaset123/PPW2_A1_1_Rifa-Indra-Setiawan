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
        Schema::create('gudang_barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama_barang');
            $table->integer('harga');
            $table->integer('stok');
            $table->integer('id_supplier'); // apa ini bakall menuju ke supplier?
            $table->foreign('id_supplier')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gudang_barang');
    }
};
