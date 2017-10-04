<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliverablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverables', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            $table->string('title');
            $table->integer('order_of');
            $table->integer('projects_id');
            $table->integer('user_id')->nullable();
            $table->integer('teams_id')->nullable();
            $table->enum('deliverables_type', ['user', 'teams']);
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
        Schema::dropIfExists('deliverables');
    }
}
