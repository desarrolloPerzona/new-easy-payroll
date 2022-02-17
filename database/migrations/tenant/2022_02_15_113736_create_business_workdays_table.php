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
//            Days array to create a loop for each field
            $daysArray = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

            $table->id();
            $table->string('name')->unique();
            $table->string('workday_type');

//            Create a column for each day of the week
            foreach ($daysArray as $day) {
                $table->boolean($day)->default(false);
                $table->time($day . '_from')->nullable();
                $table->time($day . '_to')->nullable();
            }

            $table->boolean('meal_time')->default(false);
            $table->time('meal_time_from')->nullable();
            $table->time('meal_time_to')->nullable();

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
