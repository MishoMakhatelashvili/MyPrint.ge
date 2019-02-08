<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tech_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('product_id');
            $table->text('colors');
            $table->text('print type');
            $table->text('printing speed');
            $table->text('two side printing');
            $table->text('resolution');
            $table->text('adf');
            $table->text('cartridge type');
            $table->text('cartridge resource');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tech_details');
    }
}
