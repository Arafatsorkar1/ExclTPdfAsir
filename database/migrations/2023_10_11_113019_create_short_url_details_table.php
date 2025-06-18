<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortUrlDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_url_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('url_id');
            $table->string('count')->nullable();
            $table->string('urls')->nullable();
            $table->string('modulus')->nullable();
            $table->tinyInteger('url_status')->default('1')->nullable();
            $table->timestamps();
            $table->foreign('url_id')->references('id')->on('short_urls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('short_url_details');
    }
}
