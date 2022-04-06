<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImssPatronalRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imss_patronal_registers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->decimal('risk_premium')->nullable();
            $table->string('imss_sub_delegation_key')->nullable()->unique();
            $table->string('cert_imss_user')->nullable();
            $table->string('cert_imss_password')->nullable();
            $table->string('cert_imss_cert')->unique()->nullable();
            $table->boolean('use_fiel')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imss_patronal_registers');
    }
}
