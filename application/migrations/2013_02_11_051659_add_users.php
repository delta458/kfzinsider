<?php

class Add_Users {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up() {
        DB::table('users')->insert(array(
            'email' => 'ifr_ais@yahoo.de',
            'password' => Hash::make('raubelki'),
            'name' => 'Aisek'
        ));
        DB::table('users')->insert(array(
            'email' => 'user_1@yahoo.de',
            'password' => Hash::make('user_1')
        ));
        DB::table('users')->insert(array(
            'email' => 'user_2@hotmail.com',
            'password' => Hash::make('user_2')
        ));
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down() {
        DB::table('users')->where('email', '=', 'ifr_ais@yahoo.de')->delete();
        DB::table('users')->where('email', '=', 'user_1@yahoo.de')->delete();
        DB::table('users')->where('email', '=', 'user_2@hotmail.com')->delete();
    }

}