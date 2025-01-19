<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemisterPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semister_plans', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable;
            $table->string('department')->nullable;
            $table->string('semister')->nullable;
            $table->string('status')->nullable;
            $table->string('avatar')->nullable;
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
        Schema::dropIfExists('semister_plans');
    }
}
