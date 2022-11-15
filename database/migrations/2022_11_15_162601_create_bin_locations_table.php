<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bin_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bin_id');
            $table->timestamps();
            $table->string('country');
            $table->string('district');
            $table->string('cell');
            $table->string('village');
            $table->foreign('bin_id')->references('id')->on("bins")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bin_locations');
    }
};
