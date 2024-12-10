<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periksa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_daftar_poli')->constrained('daftar_poli');
            $table->date('tgl_periksa');
            $table->text('catatan');
            $table->integer('biaya_periksa')->nullable(); // Dibuat nullable jika biaya belum ditentukan
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
        Schema::dropIfExists('periksa');
    }
}
