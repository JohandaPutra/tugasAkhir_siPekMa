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
        Schema::create('proposal_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usulan_kegiatan_id');
            $table->string('berkas_proposal');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('uploaded_at');
            $table->unsignedBigInteger('status_kegiatan_id');

            $table->foreign('usulan_kegiatan_id')->references('id')->on('usulan_kegiatan')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status_kegiatan_id')->references('id')->on('status_kegiatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposal_kegiatan');
    }
};
