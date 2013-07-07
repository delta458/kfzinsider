<?php

class Add_Services {

	/**
     * Make changes to the database.
     *
     * @return void
     */
    public function up() {
        DB::table('service')->insert(array(
            'service_name' => 'ScheibenwischerReparatur'
        ));
        DB::table('service')->insert(array(
            'service_name' => 'TempomatReparatur'
        ));
        DB::table('service')->insert(array(
            'service_name' => 'Fenster waschen'
        ));
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down() {
        DB::table('service')->where('service_name', '=', 'ScheibenwischerReparatur')->delete();
        DB::table('service')->where('service_name', '=', 'TempomatReparatur')->delete();
        DB::table('service')->where('service_name', '=', 'Fenster waschen')->delete();
    }
}