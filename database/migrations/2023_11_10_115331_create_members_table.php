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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('tele')->nullable();
            $table->string('civilite')->nullable();
            $table->string('siteweb')->nullable();
            $table->string('email')->nullable();
            $table->string('adresse')->nullable();
            $table->string('quartier')->nullable();
            $table->string('domaine')->nullable();
            $table->string('autre_domaine')->nullable();
            $table->string('biographie')->nullable();
            $table->string('principaux')->nullable();
            $table->string('suggestions')->nullable();
            $table->string('dejamemebre')->nullable();
            $table->string('lesquelles')->nullable();
            $table->string('marraine')->nullable();
            $table->string('cotisation')->nullable();
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
        Schema::dropIfExists('members');
    }
};
