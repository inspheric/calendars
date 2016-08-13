<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitationsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->integer('member_id')->unsigned();
            $table->timestamps();

            $table->unique(['event_id', 'member_id']);

            $table->foreign('event_id')
            ->references('id')->on('events')
            ->onDelete('cascade');

            $table->foreign('member_id')
            ->references('id')->on('members')
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
        Schema::drop('invitations');
    }
}
