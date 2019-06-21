<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breeds', function (Blueprint $table) {
            $table->string('id');
            $table->string('name')->nullable();
            $table->string('temperament')->nullable();
            $table->string('life_span')->nullable();
            $table->string('alt_names')->nullable();
            $table->string('wikipedia_url')->nullable();
            $table->string('cfa_url')->nullable();//json response
            $table->string('vetstreet_url')->nullable();//json response
            $table->string('vcahospitals_url')->nullable();//json response
            $table->string('country_codes')->nullable();//json response
            $table->longText('description')->nullable();//json response see length
            $table->integer('indoor')->nullable();//json response
            $table->integer('lap')->nullable();//json response
            $table->integer('suppressed_tail')->nullable();//json response
            $table->string('origin')->nullable();
            $table->string('weight_imperial')->nullable();
            $table->integer('experimental')->nullable();
            $table->integer('hairless')->nullable();
            $table->integer('natural')->nullable();
            $table->integer('rare')->nullable();
            $table->integer('rex')->nullable();
            $table->integer('suppress_tail')->nullable();
            $table->integer('short_legs')->nullable();
            $table->integer('hypoallergenic')->nullable();
            $table->integer('adaptability')->nullable();
            $table->integer('affection_level')->nullable();
            $table->string('country_code')->nullable();
            $table->integer('child_friendly')->nullable();
            $table->integer('dog_friendly')->nullable();
            $table->integer('energy_level')->nullable();
            $table->integer('grooming')->nullable();
            $table->integer('health_issues')->nullable();
            $table->integer('intelligence')->nullable();
            $table->integer('shedding_level')->nullable();
            $table->integer('social_needs')->nullable();
            $table->integer('stranger_friendly')->nullable();
            $table->integer('vocalisation')->nullable();
            $table->integer('weight_id')->unsigned();
            $table->foreign('weight_id')->references('id')->on('weights');
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
        Schema::dropIfExists('breeds');
    }
}
