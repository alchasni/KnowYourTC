<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mks', function (Blueprint $table) {
            $table->string('id_mk',4);
            $table->primary('id_mk');
            $table->string('nama_mk',128);
            $table->string('id_rmk',4)->index();
            //$table->increments('id');
            $table->timestamps();
        });
        Schema::table('mks',function($table){
            $table->foreign('id_rmk')
            ->references('id_lab')
            ->on('labs')
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
        Schema::dropIfExists('mks');
    }
}
