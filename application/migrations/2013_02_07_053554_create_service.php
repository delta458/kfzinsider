<?php

class Create_Service {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up() {
        Schema::create('service', function($table) {
                    $table->increments('id');
                    $table->string('service_name', 50)->unique();
                });
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down() {
        Schema::drop('service');
    }

}