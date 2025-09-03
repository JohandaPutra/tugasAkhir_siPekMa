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
        Schema::create('riwayat_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usulan_kegiatan_id');
            $table->unsignedBigInteger('proposal_kegiatan_id');
            $table->unsignedBigInteger('pendanaan_kegiatan_id');
            $table->unsignedBigInteger('laporan_kegiatan_id');
            $table->enum('status_final',['berhasil','gagal']);
            $table->unsignedBigInteger('status_final_id');

            $table->foreign('usulan_kegiatan_id')->references('id')->on('usulan_kegiatan')->onDelete('cascade');
            $table->foreign('proposal_kegiatan_id')->references('id')->on('proposal_kegiatan')->onDelete('cascade');
            $table->foreign('pendanaan_kegiatan_id')->references('id')->on('pendanaan_kegiatan')->onDelete('cascade');
            $table->foreign('laporan_kegiatan_id')->references('id')->on('laporan_kegiatan')->onDelete('cascade');
            $table->foreign('status_final_id')->references('id')->on('status_kegiatan')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kegiatan');
    }
};
