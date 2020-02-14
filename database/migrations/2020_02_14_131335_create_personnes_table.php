<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('Nom',80);
            $table->char('Prenom',80);
            $table->char('Email',255);
            $table->date('Date_de_naissance',320);
            $table->char('Numero_de_telephone',50);
            $table->boolean('inscrit');
            $table->text('Description'  );
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
        Schema::dropIfExists('personnes');
    }
}
