<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function($table){
            $table->increments('id');
            $table->integer('projcat_id')->unsigned();
            $table->foreign('projcat_id')->references('id')->on('projectcategories');
            $table->string('name');
            $table->text('description');
            $table->string('image');
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
		 Schema::drop('projects');
	}

}
