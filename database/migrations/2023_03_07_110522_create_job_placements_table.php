<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPlacementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_placements', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable;
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('roll_number')->nullable();
            $table->string('session')->nullable();
            $table->string('position')->unique();
            $table->string('company')->nullable();
            $table->string('details')->nullable();
            $table->string('status')->nullable();
            $table->string('avatar')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('job_placements');
    }
}
