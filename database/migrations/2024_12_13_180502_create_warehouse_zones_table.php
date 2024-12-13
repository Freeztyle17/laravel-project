<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_zones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('zone_number');
            $table->boolean('occupancy_status')->default(false);
            $table->unsignedBigInteger('warehouse_district_id');
            $table->foreign('warehouse_district_id')->references('id')->on('warehouse_districts')->onDelete('cascade');
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
        Schema::dropIfExists('warehouse_zones');
    }
}
