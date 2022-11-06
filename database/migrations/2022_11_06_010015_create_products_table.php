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
            $table->text('main-components');
            $table->text('blends-with');
            $table->text('cautions');
            $table->string('cas-tsca');
            $table->string('cas-eninces');
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
