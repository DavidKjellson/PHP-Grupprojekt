<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->timestamps(); //denna sker automatiskt
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password');
            $table->year('birth_year');
            $table->integer('member_fee'); //kommer bero på birth_year (<2002 = 300, >2002 = 500) när den skapas
            $table->boolean('is_admin')->default(false); //är inte admin om vi inte säger det när vi skapar usern
            $table->string('remember_token')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
