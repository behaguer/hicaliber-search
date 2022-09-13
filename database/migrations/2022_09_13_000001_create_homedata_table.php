<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomedataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homedata', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->smallInteger('bedrooms');
            $table->smallInteger('bathrooms');
            $table->smallInteger('stories');
            $table->smallInteger('garages');
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
        Schema::dropIfExists('homedata');
    }
}
