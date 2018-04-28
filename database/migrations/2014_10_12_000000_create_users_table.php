<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('name_ar');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('student_id');
            $table->date('dob');
            $table->boolean('gender');
            $table->float('hs_grade', 2, 2);
            $table->boolean('g_name');
            $table->string('facebook_account');
            $table->string('phone');
            $table->integer('active');
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
        Schema::dropIfExists('users');
    }
}
