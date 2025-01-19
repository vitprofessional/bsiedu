<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LabdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('labdetails', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable;
            $table->text('details')->nullable;
            $table->text('image1')->nullable;
            $table->text('image2')->nullable;
            $table->text('image3')->nullable;
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
        //
    }
}
