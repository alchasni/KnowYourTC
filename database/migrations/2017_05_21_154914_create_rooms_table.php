<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->string('id_room',5);
            $table->primary('id_room');
            $table->string('pertanyaan1',5)->index();
            $table->string('pertanyaan2',5)->index();
            $table->string('pertanyaan3',5)->index();
            $table->string('pertanyaan4',5)->index();
            $table->string('pertanyaan5',5)->index();
            $table->string('pertanyaan6',5)->index();
            $table->string('pertanyaan7',5)->index();
            $table->string('pertanyaan8',5)->index();
            $table->string('pertanyaan9',5)->index();
            $table->string('pertanyaan10',5)->index();
            $table->string('pertanyaan11',5)->index();
            $table->string('pertanyaan12',5)->index();
            $table->string('pertanyaan13',5)->index();
            $table->string('pertanyaan14',5)->index();
            $table->string('pertanyaan15',5)->index();
            $table->timestamps();
        });

        Schema::table('rooms',function($table){
        $table->foreign('pertanyaan1')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan2')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan3')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan4')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan5')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan6')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan7')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan8')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan9')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan10')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan11')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan12')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan13')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan14')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
              ->onUpdate('cascade')
              ->onDelete('cascade');
        $table->foreign('pertanyaan15')
              ->references('id_pertanyaan')
              ->on('pertanyaans')
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
        Schema::dropIfExists('rooms');
    }
}
