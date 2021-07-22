<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImssPatronalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imms_patronal', function (Blueprint $table) {
            $table->id();
            $table->integer('name');
            $table->integer('risk_premium')->nullable();
            $table->integer('sub_delegational_key')->nullable();
            $table->string('imss_sub_delegation_key')->nullable();

            $table->string('imss_user')->nullable();
            $table->string('imss_password')->nullable();
            $table->string('imss_cert')->nullable();

            $table->string('imss_fiel_user')->nullable();
            $table->string('imss_fiel_password')->nullable();
            $table->string('imss_fiel_key')->nullable();
            $table->string('imss_fiel_cert')->nullable();
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
        Schema::dropIfExists('imms_patronal');
    }
}
