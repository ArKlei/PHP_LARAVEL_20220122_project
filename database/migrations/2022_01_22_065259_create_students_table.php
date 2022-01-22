<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->string('name');
            $table->string('surname');
            $table->unsignedbigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('attendance_groups');
            $table->string('image_url');

            $table->timestamps();
        });
    }

    //ID
    //name(string)
    //surname(string)
    //group_id(bigInt)
    //image_url(string)

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
