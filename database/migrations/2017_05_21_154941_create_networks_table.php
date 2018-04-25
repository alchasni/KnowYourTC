<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networks', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('id_room',5)->index();
            $table->integer('score');
            $table->timestamps();
        });

        Schema::table('networks',function($table){
            $table->foreign('email')
             ->references('email')
                 ->on('users')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');
             $table->foreign('id_room')
              ->references('id_room')
                  ->on('rooms')
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
        Schema::dropIfExists('networks');
    }
}
