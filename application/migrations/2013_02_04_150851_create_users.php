<?php

class Create_Users {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function($table) {
                    $table->increments('id');
                    $table->string('name');
                    $table->string('password');
                    $table->string('email');
                    $table->boolean('isAdmin');
                    $table->timestamps();
                });
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }

}