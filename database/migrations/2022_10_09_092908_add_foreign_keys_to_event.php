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
        Schema::table('event', function (Blueprint $table) {
            $table->foreign('request_event_id','fk_event_to_request_event')
            ->references('id')->on('request_event')->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('user_id','fk_event_to_users')
            ->references('id')->on('users')->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event', function (Blueprint $table) {
            $table->dropForeign('fk_event_to_request_event');
            $table->dropForeign('fk_event_to_users');
        });
    }
};
