<?php

class UserManagement_User_Controller extends Base_Controller {

    public $restful = true;

    public function get_register() {
        return View::make('forms.registerform')->with('title', 'Registration');
    }

    public function post_registerAction() {

        $validation = User::validate(Input::all());
        if ($validation->passes()) {
            Log::info('passed!');
            User::create(array(
                'email' => Input::get('email'),
                'password' => Hash::make(Input::get('password'))
            ));
            return Redirect::to_route('home')->with('message', 'Thanks for registering!');
        } else {
            Log::info('taken!');
            return Redirect::to_route('register')->with_errors($validation)->with_input();
        }
    }

    public function get_login() {
        return View::make('forms.loginform')->with('title', 'Login');
    }

    public function post_loginAction() {

        //Get credentials
        $credentials = array(
            'username' => Input::get('email'),
            'password' => Input::get('password')
        );

        if (Auth::attempt($credentials)) {
            //Return sucess and admin yes or no
            //Get user by mail
            //$email = $credentials['username'];
            //$user = User::where('email', '=', $email)->first();
            return Redirect::to_route('home')->with('message', 'Login success!');
        } else {
            return Redirect::to_route('login')->with('message', 'Login failed!');
        }
    }

    public function get_logout() {
        if (Auth::check()) {
            Auth::logout();
            return Redirect::to_route('home')->with('message', 'Logout success!');
        } else {
            return Redirect::to_route('home');
        }
    }

}