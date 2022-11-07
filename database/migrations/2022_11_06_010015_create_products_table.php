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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('session');
            $table->string('name');
            $table->string('image');
            $table->text('desc');
            $table->text('application');
            $table->text('components');
            $table->text('blends_with');
            $table->text('cautions');
            $table->string('msds');
            $table->string('specs');
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
        Schema::dropIfExists('products');
    }
};
