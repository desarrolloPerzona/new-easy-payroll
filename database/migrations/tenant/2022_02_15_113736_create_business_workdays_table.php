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

            $table->boolean('tuesday')->default(false);
            $table->time('tuesday_from');
            $table->time('tuesday_to');

            $table->boolean('wednesday')->default(false);
            $table->time('wednesday_from');
            $table->time('wednesday_to');

            $table->boolean('thursday')->default(false);
            $table->time('thursday_from');
            $table->time('thursday_to');

            $table->boolean('friday')->default(false);
            $table->time('friday_from');
            $table->time('friday_to');

            $table->boolean('saturday')->default(false);
            $table->time('saturday_from');
            $table->time('saturday_to');

            $table->boolean('sunday')->default(false);
            $table->time('sunday_from');
            $table->time('sunday_to');

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
