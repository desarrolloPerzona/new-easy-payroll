<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            /** PERSONAL DATA  */
            $table->string('last_name')->after('name');
            $table->string('middle_name')->after('last_name')->nullable();
            $table->string('tenancy_company')->after('middle_name')->nullable();
            $table->string('tenancy_domain')->after('middle_name')->nullable();
            $table->boolean('is_admin')->after('password')->default(1);
            $table->boolean('terms')->after('is_admin')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('tenancy_company');
            $table->string('tenancy_domain');
            $table->boolean('is_admin');
            $table->boolean('terms');
        });
    }
}
