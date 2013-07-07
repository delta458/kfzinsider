<?php

class Create_Garage {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('garage', function($table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->string('address', 100);
			$table->string('description', 300);
			$table->string('coordinates', 300);
			$table->decimal('vote', 5,2);
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('garage');
	}

}