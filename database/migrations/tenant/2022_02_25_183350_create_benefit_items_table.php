<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBenefitItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefit_items', function (Blueprint $table) {
            $table->id();
            $table->integer('antiquity_from');
            $table->integer('antiquity_to');
            $table->integer('bonus_days');
            $table->integer('vacation_days');
            $table->decimal('vacation_prime');
            $table->integer('economical_days');
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
        Schema::dropIfExists('benefit_items');
    }
}
