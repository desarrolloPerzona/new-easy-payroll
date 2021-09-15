<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('email');
            $table->string('tenancy_company')->nullable();
            $table->string('tenancy_domain')->nullable();
            $table->integer('role')->default(1);
            $table->string('plan')->nullable();
            $table->boolean('terms')->default(1);
            $table->timestamps();
            $table->json('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
}
