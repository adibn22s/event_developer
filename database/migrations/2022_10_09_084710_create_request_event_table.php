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
        Schema::create('request_event', function (Blueprint $table) {
            $table->id();
            $table->enum('role',[1,2,3,4,5]);
            $table->string('instance');
            $table->string('event_name')-> unique();
            $table->enum('category',[1,2,3]);
            $table->string('invite_group_link');
            $table->date('date_is_held');
            $table->string('description');
            $table->longText('poster')->nullable();
            $table->date('added_date')->nullable();
            $table->time('added_time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_event');
    }
};
