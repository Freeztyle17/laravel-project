<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehouseDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_districts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('district_number');
            $table->string('square_number');
            $table->string('address');
            $table->string('image_url')->nullable(); // Добавляем поле для ссылки на картинку
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
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
        Schema::dropIfExists('warehouse_districts');
    }
}
