<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("brandId")->references('brandId')->on('bikes_brands')->onpdate('cascade')->ondelete('cascade');
            $table->string("bikeName");
            $table->float("bikePrice");
            $table->string("bikeImageUrl");
            $table->string('bikeDescription');
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
        Schema::dropIfExists('bike_brandsets');
    }
}
