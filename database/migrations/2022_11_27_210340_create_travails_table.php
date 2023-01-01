<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travails', function (Blueprint $table) {
            $table->id();

            $table->string("sujet");
            $table->string("categorie");
            $table->string("faculte");
            $table->string("etudiant");
            $table->string("annnee_etudes");
            $table->string("nbrs_pages");
            $table->string("path_document");
            $table->boolean("status");
            $table->bigInteger("viewCounter");
            $table->unsignedBigInteger("domaine_expertises_id")->nullable();
            $table->foreign("domaine_expertises_id")->references('id')->on("domaine_expertises");
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
        Schema::dropIfExists('travails');
    }
}
