<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{

    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',75);
            $table->string('apellido',75);
            $table->string('edad',75);
            $table->string('grado',75);
            $table->string('sexo',75);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('estudiante');
    }
}