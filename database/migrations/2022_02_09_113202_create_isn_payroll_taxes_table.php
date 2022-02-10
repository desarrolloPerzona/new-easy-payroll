<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsnPayrollTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('isn_payroll_taxes', function (Blueprint $table) {
            $table->id();
            $table->string('state');
            $table->decimal('lower_limit', 12, 2);
            $table->decimal('upper_limit', 12, 2);
            $table->decimal('fixed_fee');
            $table->decimal('lower_limit_surplus_percentage');
            $table->smallInteger('year');
            $table->softDeletes();
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
        Schema::dropIfExists('isn_payroll_taxes');
    }
}
