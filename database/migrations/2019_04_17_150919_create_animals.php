<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->string('photo');
            $table->enum('size',['small','medium', 'large']);
            $table->enum('type',['dog','cat','wild'])->default('dog');
            $table->string('breed')->nullable();
            $table->integer('years_old')->nullable();
            $table->enum('status', ['healthy', 'stable', 'sick', 'in_need', 'unvaccinated', 'critical', 'adopted']);
            $table->unsignedBigInteger('shelter_id');
            $table->foreign('shelter_id')->references('id')->on('shelters')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
