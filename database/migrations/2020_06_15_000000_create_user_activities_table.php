<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_activities', function (Blueprint $table) {
            //detta table används för att koppla samman användarna (users) med aktiviteterna
            $table->id('ua_id');
            $table->string('ua_user'); //användarens id (från user table)
            $table->string('ua_activity'); //aktivitetens id (från activities table)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_activities');
    }
}
