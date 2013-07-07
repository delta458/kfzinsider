<?php

class Create_Category {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category', function($table) {
                        $table->increments('id');
			$table->string('category_name', 50)->unique();
		});		
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category');
	}

}