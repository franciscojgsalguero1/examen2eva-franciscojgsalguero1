<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros_docentes', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion');
            $table->string('codigos');
            $table->string('cif');
            $table->string('dir_postal');
            $table->string('cp');
            $table->string('director_nom');
            $table->string('director_apell1');
            $table->string('director_apell2');
            $table->string('identificable');
            $table->string('tipo_identificable');
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
        Schema::dropIfExists('centros_docentes');
    }
}
