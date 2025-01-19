<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_panels', function (Blueprint $table) {
            $table->id();
            $table->string('adminname')->nullable();
            $table->string('adminemail')->nullable();
            $table->string('adminmobile')->nullable();
            $table->string('adminspeech')->nullable();
            $table->string('adminimage')->nullable();
            $table->string('adminpassword')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('admin_panels');
    }
}
