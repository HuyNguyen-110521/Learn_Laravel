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
        Schema::create('cars', function (Blueprint $table) {
            $table->increments("id");
            $table->string("description");
            $table->string("model");
            $table->date("produced_on");
            $table->string('image');
            $table->unsignedInteger('manufacturer_id');
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
        Schema::table('cars', function (Blueprint $table) {
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
