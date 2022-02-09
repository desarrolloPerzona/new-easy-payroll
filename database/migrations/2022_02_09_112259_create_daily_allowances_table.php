<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyAllowancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_allowances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('from_income');
            $table->decimal('to_income');
            $table->decimal('subsidy');
            $table->smallInteger('year');
            $table->string('allowance_type');
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
        Schema::dropIfExists('daily_allowances');
    }
}
