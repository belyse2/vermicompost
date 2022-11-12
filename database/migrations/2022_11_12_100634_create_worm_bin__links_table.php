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
        Schema::create('worm_bin__links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("bin_id");
            $table->unsignedBigInteger("wormtype_id");
            $table->timestamps();
            $table->foreign("wormtype_id")->references('id')->on("worm_types")->onDelete("cascade");
            $table->foreign("bin_id")->references('id')->on("bins")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worm_bin__links');
    }
};
