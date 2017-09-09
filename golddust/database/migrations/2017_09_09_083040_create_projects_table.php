<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('user_id');
	    $table->string('title');
	    $table->text('body');
	    $table->integer('amount_spent')->nullable();
	    $table->enum('project_length_unit', ['days', 'weeks', 'months', 'indefinitely']);
	    $table->integer('project_length')->nullable();
            $table->enum('payment_period', ['hourly', 'fixed', 'piece']);
	    $table->integer('deliverables')->nullable();
            $table->enum('skill_level', ['entry', 'intermediate', 'advanced']);
	    $table->integer('test_id');
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
        Schema::dropIfExists('projects');
    }
}
