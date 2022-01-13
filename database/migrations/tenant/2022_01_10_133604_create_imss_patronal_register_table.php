<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImssPatronalRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imss_patronal_register', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->decimal('risk_premium');
            $table->string('imss_sub_delegation_key')->unique();
            $table->boolean('use_fiel')->default(false);
            $table->string('cert_imss_user')->unique();
            $table->string('cert_imss_password')->unique();
            $table->string('cert_imss_cert')->unique();
            $table->string('fiel_private_key')->unique();
            $table->string('fiel_cert')->unique();
            $table->string('fiel_password')->unique();



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
        Schema::dropIfExists('imss_patronal_register');
    }
}
