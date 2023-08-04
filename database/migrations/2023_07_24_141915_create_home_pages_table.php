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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title',50)->nullable();
            $table->string('post_title',50)->nullable();
            $table->text('post_description')->nullable();
            $table->string('testimonial_title')->nullable();
            $table->text('testimonial_description')->nullable();
            $table->string('test_title1',50)->nullable();
            $table->string('test_title2',50)->nullable();
            $table->string('test_title3',50)->nullable();
            $table->text('test_description1')->nullable();
            $table->text('test_description2')->nullable();
            $table->text('test_description3')->nullable();
            $table->string('ov_title',50)->nullable();
            $table->text('ov_description')->nullable();
            $table->text('ov_destination')->nullable();
            $table->string('ov_hotels',50)->nullable();
            $table->string('ov_travelars',50)->nullable();
            $table->string('happy_customer')->nullable();
            $table->text('about_desciption')->nullable();
            $table->string('ad_phone_number',15)->nullable();
            $table->string('ad_email')->nullable();
            $table->string('ad_live_chet',15)->nullable();
            $table->string('sl_twiter',50)->nullable();
            $table->string('sl_facebook',50)->nullable();
            $table->string('sl_linkedln',50)->nullable();
            $table->string('sl_instagram',50)->nullable();
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
        Schema::dropIfExists('home_pages');
    }
};
