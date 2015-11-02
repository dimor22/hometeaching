<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('visits', function (Blueprint $table) {
		    $table->increments('id')->unsigned();
		    $table->integer('member_id');
		    $table->char('visited_id');
		    $table->char('month');
		    $table->char('day');
		    $table->char('time');
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
        //
    }
}
