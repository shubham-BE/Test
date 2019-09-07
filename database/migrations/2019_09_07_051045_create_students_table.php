<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('dob')->nullable();
            $table->string('email')->unique();
            // $table->string('password');
            $table->string('profile_pic')->nullable();
            $table->string('mobile')->nullable();
            $table->string('gender')->nullable();
            $table->string('university')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
        Schema::table('students',function ($table)
        {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
