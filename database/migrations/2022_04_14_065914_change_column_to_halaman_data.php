<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ChangeColumnToHalamanData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('halaman_data', function (Blueprint $table) {
        //     $table->integer('usia')->change();
            
        // });
        DB::statement('ALTER TABLE halaman_data ALTER COLUMN 
                  company_id TYPE integer USING (usia)::integer');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('halaman_data', function (Blueprint $table) {
            //
        });
    }
}
