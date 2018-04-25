<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->string('id_pertanyaan',5);
            $table->primary('id_pertanyaan');
            $table->string('pilihan1',100);
            $table->string('pilihan2',100);
            $table->string('pilihan3',100);
            $table->string('pilihan4',100);
            $table->string('benar',5);
            $table->string('soal',100);
            $table->string('foto',100);
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
        Schema::dropIfExists('pertanyaans');
    }
}
