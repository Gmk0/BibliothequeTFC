<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravailfinCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travailfin_cycles', function (Blueprint $table) {
            $table->id();
            $table->string("sujet");
            $table->string("categorie");
            $table->string("faculte");
            $table->string("etudiant");
            $table->string("annnee_etudes");
            $table->string("nbrs_pages");
            $table->string("path_document");
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
        Schema::dropIfExists('travailfin_cycles');
    }
}
