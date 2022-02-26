<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('table_benefits', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('years_of_antiquity');
            $table->integer('bonus_days');
            $table->integer('vacations');
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
        Schema::dropIfExists('table_benefits');
    }
}
