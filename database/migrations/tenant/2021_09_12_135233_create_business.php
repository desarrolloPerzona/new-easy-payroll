<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusiness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('business_name')->nullable();
            $table->string('logo_url')->nullable();
            $table->boolean('logo_on_receipt')->nullable();
            $table->string('industry')->nullable();
            $table->string('RFC', 13)->nullable();
            $table->string('zip_code',5)->nullable();
            $table->text('borough')->nullable();
            $table->string('municipality',255)->nullable();
            $table->string('state',255)->nullable();
            $table->string('fiscal_regime')->nullable();
            $table->boolean('stp_status')->nullable();
            $table->string('stp_account')->nullable();
            $table->string('stp_clabe_account')->nullable();
            $table->string('sat_key')->nullable();
            $table->string('sat_cert')->nullable();
            $table->string('sat_password')->nullable();
            $table->boolean('extra_time')->nullable();
            $table->boolean('average_variable_calc')->nullable();
            $table->boolean('stp_payroll')->nullable();
            $table->boolean('imss_minimum_salary_patronal')->nullable();
            $table->boolean('imss_send_movements')->nullable();
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
        Schema::dropIfExists('business');
    }
}
