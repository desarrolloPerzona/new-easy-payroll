<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsrSubsidiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isr_subsidies', function (Blueprint $table) {
            $table->id();
            $table->decimal('income_from');
            $table->decimal('income_up_to');
            $table->decimal('employment_subsidy');
            $table->smallInteger('year');
            $table->string('subsidy_type');
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
        Schema::dropIfExists('isr_subsidies');
    }
}
