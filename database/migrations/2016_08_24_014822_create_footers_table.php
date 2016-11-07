<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('footers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('content')->nullable();
			$table->string('home_phone', 12)->nullable();
			$table->string('mobi_phone', 12)->nullable();
			$table->string('email')->nullable();
			$table->string('skype')->nullable();
			$table->string('twitter')->nullable();
			$table->text('facebook')->nullable();
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
		Schema::drop('footers');
	}

}
