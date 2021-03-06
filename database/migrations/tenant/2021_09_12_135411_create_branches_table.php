<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('street',)->nullable();
            $table->string('zip_code',5)->nullable();
            $table->text('borough')->nullable();
            $table->string('municipality',)->nullable();
            $table->string('state',)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('business_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
