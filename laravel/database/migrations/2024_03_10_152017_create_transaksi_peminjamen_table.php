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
        Schema::create('transaksi_peminjamen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id');
            $table->foreignId('buku_id'); //untuk satu buku saja per pinjam
            $table->dateTime('tgl_pinjam');
            $table->dateTime('tgl_kembali')->nullable();
            $table->double('denda')->nullable();
            $table->enum('status', ['0', '1', '2', '3'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_peminjamen');
    }
};
