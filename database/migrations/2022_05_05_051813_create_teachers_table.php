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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();

            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->integer('age')->nullable();
            $table->date('bdate');
            $table->date('rdate')->nullable();
            $table->string('email');
            $table->string('degree');
            $table->longText('description')->nullable();
            $table->foreignId('faculties_id')->nullable();
            $table->string('image')->nullable();

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
        Schema::dropIfExists('teachers');
    }
};
