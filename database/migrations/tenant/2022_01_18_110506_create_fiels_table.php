<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('fiel_private_key')->unique()->nullable();
            $table->string('fiel_cert')->unique()->nullable();
            $table->string('fiel_password')->unique()->nullable();
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
        Schema::dropIfExists('fiels');
    }
}
