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
        Schema::create('ccomments', function (Blueprint $table) {
            $table->id()->autoIncrement();

            $table->integer('user_id');
            $table->foreignId('content_id');
            $table->string('subject');
            $table->string('review')->nullable();
            $table->string('ip')->nullable();
            $table->integer('rate')->default(0);
            $table->string('status')->default('NEW');

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
        Schema::dropIfExists('ccomments');
    }
};
