<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCendocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cendocentes', function (Blueprint $table) {
            $table->id();
            $table->string('denominacion', 40);
            $table->string('codigo');
            $table->string('cif', 15);
            $table->string('titularidad')->enum('public', 'private');
            $table->string('dir_postal')->nullable();
            $table->string('cp');
            $table->string('director_nom');
            $table->string('director_apell1');
            $table->string('director_apell2')->nullable();
            $table->string('identificador');
            $table->string('tipo_identificable')->enum('dni', 'nie', 'passport', 'others');
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
        Schema::dropIfExists('cendocentes');
    }
}
