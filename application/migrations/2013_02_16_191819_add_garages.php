<?php

class Add_Garages {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('garage')->insert(array(
		'name' => 'Pussy',
		'address' => 'Gusigasse 12',
		'description' => 'Werstatt f�r pussies',
		'coordinates' => '22.33',
		'vote' => 33.5,
		));
		
		DB::table('garage')->insert(array(
		'name' => 'Mussy',
		'address' => 'Gusigasse 13',
		'description' => 'Werstatt f�r mussies',
		'coordinates' => '22.33',
		'vote' => 66.5,
		));
		
		DB::table('garage')->insert(array(
		'name' => 'Lussy',
		'address' => 'Gusigasse 12',
		'description' => 'Werstatt f�r lussies',
		'coordinates' => '22.33',
		'vote' => 33.5,
		));
		
		DB::table('garage')->insert(array(
		'name' => 'Tussy',
		'address' => 'Gusigasse 12',
		'description' => 'Werstatt f�r tussies',
		'coordinates' => '22.33',
		'vote' => 33.5,
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('garage')->where('name','=','Pussy')->delete();
                DB::table('garage')->where('name','=','Mussy')->delete();
                DB::table('garage')->where('name','=','Lussy')->delete();
                DB::table('garage')->where('name','=','Tussy')->delete();
	}

}