<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('street')->nullable();
            $table->string('ext_number',10)->nullable();
            $table->string('int_number',10)->nullable();
            $table->string('zip_code')->nullable();
            $table->string('borough')->nullable();
            $table->string('municipality')->nullable();
            $table->string('state')->nullable();
            $table->boolean('fiscal_address')->nullable();
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
        Schema::dropIfExists('address');
    }
}
