<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkageIndustriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linkage_industries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable;
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->nullable();
            $table->string('formDate')->nullable();
            $table->string('mouSign')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('linkage_industries');
    }
}
