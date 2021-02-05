<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('nameCompleto');
            $table->string('email');
            $table->string('phone');
            $table->string('age');
            $table->string('dateBirth');
            $table->bigInteger('configuracion_id') ->unsigned();
            $table->foreign('configuracion_id')
                    ->references('id')
                    ->on('configuracions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
