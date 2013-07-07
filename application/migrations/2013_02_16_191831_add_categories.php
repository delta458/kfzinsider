<?php

class Add_Categories {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up() {
        DB::table('category')->insert(array(
            'category_name' => 'Zusatzleistung'
        ));
        DB::table('category')->insert(array(
            'category_name' => 'Elektronik'
        ));
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down() {
        DB::table('category')->where('category_name', '=', 'Zusatzleistung')->delete();
        DB::table('category')->where('category_name', '=', 'Elektronik')->delete();
    }

}