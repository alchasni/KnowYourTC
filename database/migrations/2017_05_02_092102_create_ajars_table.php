<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAjarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajars', function (Blueprint $table) {
            $table->string('id_ajar',4);
            $table->primary('id_ajar');
            $table->string('id_dosenajar',4);
            $table->string('id_mkajar',4);
            //$table->increments('id');
            $table->timestamps();
        });

        Schema::table('ajars',function($table){
            $table->foreign('id_dosenajar')
            ->references('id_dosen')
            ->on('dosens')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_mkajar')
            ->references('id_mk')
            ->on('mks')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ajars');
    }
}
