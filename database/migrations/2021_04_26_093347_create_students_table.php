<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('semister')->nullable();
            $table->string('session')->nullable();
            $table->string('roll_number')->nullable();
            $table->string('regi_no')->nullable();
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
        Schema::dropIfExists('students');
    }
}
