<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHiredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hireds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('projects_id');
            $table->integer('user_id')->nullable();
            $table->integer('teams_id')->nullable();
            $table->enum('hireds_type', ['user', 'teams']);
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
        Schema::dropIfExists('hireds');
    }
}
