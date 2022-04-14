<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteColumnToHalamanData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('halaman_data', function (Blueprint $table) {
            $table->foreignId('desa_id')->nullable()->constrained();
            $table->string('usia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('halaman_datas', function (Blueprint $table) {
            //
        });
    }
}
