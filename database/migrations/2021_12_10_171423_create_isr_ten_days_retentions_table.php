<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsrTenDaysRetentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isr_ten_days_retentions', function (Blueprint $table) {
            $table->id();
            $table->decimal('lower_limit');
            $table->decimal('upper_limit');
            $table->decimal('fixed_feed');
            $table->decimal('percentage_excess_to_lower_limit');
            $table->smallInteger('year');
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
        Schema::dropIfExists('isr_ten_days_retentions');
    }
}
