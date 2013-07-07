<?php

class User extends Basemodel {
    
    public static $table = 'users';
    public static $rules = array(
        'email'=>'required|unique:users',
        'password'=>'required|confirmed',
        'password_confirmation'=>'required'
    );
}