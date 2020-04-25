<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('title_id');
            $table->foreign('title_id')->references('id')->on('series');
            $table->string('description');
            $table->unsignedBigInteger('classification_id');
            $table->foreign('classification_id')->references('id')->on('classification');
            $table->string('picture_link')->nullable(true);
            $table->unsignedBigInteger('faction_id');
            $table->foreign('faction_id')->references('id')->on('faction');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
