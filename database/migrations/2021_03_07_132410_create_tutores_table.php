<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->string('bussines', 30);
            $table->string('typedocument')->enum('dni', 'nie', 'passport', 'others');
            $table->string('identity', 12);
            $table->string('name', 15);
            $table->string('firstname', 15);
            $table->string('secondname', 15)->nullable();
            $table->string('country')->enum('spain', 'italy');
            $table->string('province')->nullable();
            $table->string('municipality')->nullable();
            $table->string('state')->enum('active', 'notactive');
            $table->string('telephone', 12);
            $table->string('email');
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
        Schema::dropIfExists('tutores');
    }
}

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

