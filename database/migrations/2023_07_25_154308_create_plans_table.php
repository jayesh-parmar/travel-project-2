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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('p_name',30)->nullable();
            $table->string('p_price',30)->nullable();
            $table->string('p_description',30)->nullable();
            $table->string('project',30)->nullable();
            $table->string('pages',30)->nullable();
            $table->string('email',30)->nullable();
            $table->string('image',30)->nullable();
            $table->string('link',30)->nullable();
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
        Schema::dropIfExists('plans');
    }
};
