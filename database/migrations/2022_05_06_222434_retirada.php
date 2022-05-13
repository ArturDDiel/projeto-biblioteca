<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retiradas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dataRetirada');
            $table->date('dataDevolucao');
            $table->string('pessoa', 100);
            $table->string('livro', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
