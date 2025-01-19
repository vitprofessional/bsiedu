<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherPanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_panels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('designation')->nullable();
            $table->string('rank')->nullable();
            $table->string('joining_date')->nullable();
            $table->string('pre_address')->nullable();
            $table->string('per_address')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('religion')->nullable();
            $table->string('bl_group')->nullable();
            $table->string('avatar')->nullable();
            $table->string('status')->nullable();
            $table->string('verifiedcode')->nullable();
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
        Schema::dropIfExists('teacher_panels');
    }
}
