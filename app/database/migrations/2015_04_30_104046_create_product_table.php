<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function($table){
            $table->increments('id');
            $table->integer('prodcat_id')->unsigned();
            $table->foreign('prodcat_id')->references('id')->on('productcategories');
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 6, 2)->nullable();
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
		Schema::drop('products');
	}

}
