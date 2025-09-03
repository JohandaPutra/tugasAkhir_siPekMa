<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('persetujuan_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->enum('progres_kegiatan',['usulan','proposal','pendanaan','laporan']);
            $table->integer('progres_kegiatan_id');
            $table->unsignedBigInteger('reviewed_by');
            $table->enum('level_birokrasi',['HIMA','Pembina-Hima','KAPRODI','WADEK_III']);
            $table->enum('Keputusan_kegiatan',['setuju','revisi','tolak']);
            $table->text('komentar_keputusan');
            $table->timestamp('waktu_keputusan');

            $table->foreign('reviewed_by')->references('id')->on('users')->onDelete('cascade');
            $table->index(['progres_kegiatan','progres_kegiatan_id']);
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persetujuan_kegiatan');
    }
};
