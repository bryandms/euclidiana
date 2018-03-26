<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_styles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('campus', 20);
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
        Schema::dropIfExists('learning_styles');
    }
}
