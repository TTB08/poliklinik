<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarPoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_poli', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pasien')->constrained('pasien');
            $table->foreignId('id_jadwal')->constrained('jadwal_periksa');
            $table->text('keluhan');
            $table->integer('no_antrian')->nullable(); // Dibuat nullable jika nomor antrian belum ditentukan
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
        Schema::dropIfExists('daftar_poli');
    }
}
