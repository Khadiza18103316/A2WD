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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('logo_text');
            $table->string('address');
            $table->string('mbl_num');
            $table->string('alt_num');
            $table->string('fb_link');
            $table->string('footer_text');
            $table->string('location');
            $table->string('email');
            $table->string('footer_num');
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
        Schema::dropIfExists('settings');
    }
};
