<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('dokter_id')->nullable();
            $table->integer('pembayaran_id')->nullable();
            $table->date('tanggal_periksa');
            $table->json('keluhan');
            $table->json('diagnosa')->nullable();
            $table->json('jenis_penyakit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekam_medis');
    }
};
