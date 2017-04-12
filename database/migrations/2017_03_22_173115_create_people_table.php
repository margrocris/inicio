<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigInteger('id')->primary();
            $table->string('name');
            $table->string('fLastName')->nullable();
            $table->string('sLastName')->nullable();
            $table->integer('age')->nullable();
            $table->string('code', 15)->nullable();
            $table->enum('gender', ['m', 'f'])->default('m');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
