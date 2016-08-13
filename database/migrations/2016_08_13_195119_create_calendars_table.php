<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('display_name')->nullable();
            $table->integer('site_id')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['site_id', 'name']);

            $table->foreign('site_id')
            ->references('id')->on('sites')
            ->onDelete('cascade');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('calendars');
    }
}
