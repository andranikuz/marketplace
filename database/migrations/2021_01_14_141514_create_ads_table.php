<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            $table->string('name', 150);
            $table->integer('category_id')->index();
            $table->integer('city_id')->index();
            $table->string('description', 500);
            $table->date('publish_date', 255);
            $table->float('cost');
            $table->integer('user_id');
            $table->integer('views_count')->default(0);
            $table->integer('photos_count')->default(0);
            $table->integer('status');
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
        Schema::dropIfExists('ads');
    }
}
