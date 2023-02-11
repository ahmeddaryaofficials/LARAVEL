<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookingconfirm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_confirmation', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cate_id');
            $table->bigInteger('user_id');
            $table->timestamp('created_at');
            $table->string('booking_availibility');
            $table->string('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
