<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('image')->nullable();
			$table->integer('product_id')->unsigned();//không được < 0
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');//khi xóa id của users thì xóa luôn những sản phẩm có user_id tương ứng
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
		Schema::drop('product_images');
	}

}
