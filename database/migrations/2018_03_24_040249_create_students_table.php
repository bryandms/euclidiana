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
            $table->string('gender', 20);
            $table->string('campus', 20);
            $table->double('average', 4, 2);
            $table->integer('ca');
            $table->integer('ec');
            $table->integer('ea');
            $table->integer('or');
            $table->integer('ca_ec');
            $table->integer('ea_or');
            $table->string('style', 20);
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
        Schema::dropIfExists('students');
    }
}
