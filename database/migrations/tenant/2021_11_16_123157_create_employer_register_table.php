<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        Schema::create('employer_registers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('business_branch_id');
            $table->string('name');
            $table->string('risk_premium')->nullable();
            $table->string('imss_sub_delegation_key')->nullable();
            $table->boolean('use_imss_cert')->default(false);
            $table->string('imss_cert_user')->nullable();
            $table->string('imss_cert_password')->nullable();
            $table->string('imss_cert_file')->nullable();
            $table->boolean('use_shcp_cert_fiel')->default(false);
            $table->string('shcp_cert_fiel_file')->nullable();
            $table->string('shcp_cert_fiel_private_key')->nullable();
            $table->string('shcp_cert_fiel_password')->nullable();
            $table->unsignedBigInteger('business_id');
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
        Schema::dropIfExists('employer_register');
    }
}
