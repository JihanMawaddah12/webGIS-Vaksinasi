<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalamanDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaman_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tematik_id')->constrained();
            $table->string('Kelompok');
            $table->integer('nakes');
            $table->integer('petugas_publik');
            $table->integer('lansia');
            $table->integer('masyarakat_umum');
            $table->integer('remaja');
            $table->integer('usia');
            $table->date('tanggal')->nullable();
            $table->foreignId('desa_id')->nullable()->constrained();
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
        Schema::dropIfExists('halaman_data');
    }
}
