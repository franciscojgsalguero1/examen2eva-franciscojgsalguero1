<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
            $table->string('tipus_document');
            $table->string('document_identitat')->unique();
            $table->string('nom');
            $table->string('primer_llinatge');
            $table->string('segon_llinatge');
            $table->string('pais_document_identitat');
            $table->string('provincia')->nullable();
            $table->string('municipi')->nullable();
            $table->string('estat')->nullable();
            $table->bigInteger('telefon');
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
        Schema::dropIfExists('tutors');
    }
}