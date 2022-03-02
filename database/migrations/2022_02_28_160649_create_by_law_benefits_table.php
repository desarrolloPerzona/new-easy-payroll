<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateByLawBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('by_law_benefits', function (Blueprint $table) {
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
        Schema::dropIfExists('by_law_benefits');
    }
}
