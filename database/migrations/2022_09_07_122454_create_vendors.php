<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cate_id');
            $table->string('vendor_username');
            $table->string('vendor_password');
            $table->string('vendor_name');
            $table->mediumText('small_descrip');
            $table->longText('description');
            $table->string('original_price');
            $table->string('selling_price');
            $table->string('image');
            $table->String('locaation');
            $table->integer('min');
            $table->integer('max');
            $table->tinyInteger('status');
            $table->tinyInteger('trending');
            $table->String('meta_title');
            $table->String('meta_descrip');
            $table->String('meta_keywords');



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
        Schema::dropIfExists('vendors');
    }
}
