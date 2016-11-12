<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAttendedEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendedEvents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idEvent')->unsigned();
            $table->integer('idCalendar')->unsigned();
            $table->foreign('idEvent')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('idCalendar')->references('id')->on('calendars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attendedEvents');
    }
}
