<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProbidhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('probidhans', function (Blueprint $table) {
            $table->id();
            $table->string('probidhan')->nullable;
            $table->string('department')->nullable;
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
        Schema::dropIfExists('probidhans');
    }
}
