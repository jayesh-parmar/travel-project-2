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
        Schema::create('travel_backends', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title',50)->nullable();
            $table->string('pricepage_title',50)->nullable();
            $table->text('pricepage_description')->nullable();
            $table->string('info_title',50)->nullable();
            $table->text('info_description')->nullable();
            $table->string('pimage')->nullable();
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
        Schema::dropIfExists('travel_backends');
    }
};
