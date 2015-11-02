<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('members', function (Blueprint $table) {
		    $table->increments('id')->unsigned();
		    $table->char('role', 10);
		    $table->char('fname', 40);
		    $table->char('lname', 40);
		    $table->char('phone', 15);
		    $table->char('email', 100);
		    $table->char('pwd', 30);
		    $table->char('street', 40);
		    $table->char('city', 40);
		    $table->char('zip', 10);
		    $table->char('state', 50);
		    $table->char('apartment_number', 20)->nullable();
		    $table->char('gender', 1)->nullable();
		    $table->string('photo')->nullable();
		    $table->boolean('has_companion')->default(0);
		    $table->integer('companionship_id')->default(0);
		    $table->integer('visited_by')->default(0);
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
