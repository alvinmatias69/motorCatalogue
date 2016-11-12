<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableServiceInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceInfos', function (Blueprint $table) {
            $table->string('name');
            $table->text('detail');
            $table->integer('idMotorcycle')->unsigned();
            $table->foreign('idMotorcycle')->references('id')->on('motorcycles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('serviceInfos');
    }
}
