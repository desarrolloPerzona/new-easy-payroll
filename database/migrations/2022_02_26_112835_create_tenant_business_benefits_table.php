<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantBusinessBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_business_benefits', function (Blueprint $table) {
            $table->id();
            $table->integer('antiquity_from');
            $table->integer('antiquity_to')->nullable();
            $table->integer('bonus_days');
            $table->integer('vacation_days');
            $table->decimal('vacation_prime');
            $table->integer('year');
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
        Schema::dropIfExists('tenant_business_benefits');
    }
}
