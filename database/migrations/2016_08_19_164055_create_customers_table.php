<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('firstname', 60)->nullable();
			$table->string('lastname', 60)->nullable();
			$table->string('phone', 12)->nullable();
			$table->string('email', 80)->nullable();
			$table->integer('price')->unsigned();
			$table->string('product');
			$table->string('address')->nullable();
			$table->string('noite')->nullable();
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
		Schema::drop('customers');
	}

}
