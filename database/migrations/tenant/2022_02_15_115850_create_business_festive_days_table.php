<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessFestiveDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_festive_days', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->date('date');
            $table->boolean('working')->default(false);
            $table->boolean('schedule_all_day')->default(false);
            $table->time('schedule_from')->nullable();
            $table->time('schedule_to')->nullable();
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
        Schema::dropIfExists('business_festive_days');
    }
}
