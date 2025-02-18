<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penerimaan', function (Blueprint $table) {
            $table->id('id_penerimaan');
            $table->date('tanggal_penyimpanan');
            $table->text('alamat');
            $table->integer('kuantity');
            $table->string('kode_barang'); // Ubah tipe data menjadi string

            $table->foreign('kode_barang')->references('kode_barang')->on('barang')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penerimaan');
    }
};
