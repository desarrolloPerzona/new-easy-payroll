<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessWorkdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_workdays', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('workday_type');
            $table->boolean('monday')->default(false);
            $table->time('monday_from');
            $table->time('monday_to');

            $table->boolean('meal_time')->default(false);
            $table->time('meal_time_from');
            $table->time('meal_time_to');


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
        Schema::dropIfExists('business_workdays');
    }
}
