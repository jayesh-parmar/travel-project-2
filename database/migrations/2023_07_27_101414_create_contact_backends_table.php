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
        Schema::create('contact_backends', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title',50)->nullable();
            $table->string('address')->nullable();
            $table->string('phone_pumber',15)->nullable();
            $table->string('website',50)->nullable();
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
        Schema::dropIfExists('contact_backends');
    }
};
