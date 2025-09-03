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
        Schema::create('usulan_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_kegiatan');
            $table->text('deskripsi_kegiatan');
            $table->unsignedBigInteger('jenis_kegiatan_id');
            $table->text('tempat_kegiatan');
            $table->unsignedBigInteger('jenis_pendanaan_id');
            $table->date('tanggal_kegiatan');
            $table->unsignedBigInteger('status_kegiatan_id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();



            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('jenis_kegiatan_id')->references('id')->on('jenis_kegiatan')->onDelete('cascade');
            $table->foreign('jenis_pendanaan_id')->references('id')->on('jenis_pendanaan')->onDelete('cascade');
            $table->foreign('status_kegiatan_id')->references('id')->on('status_kegiatan')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usulan_kegiatan');
    }
};
