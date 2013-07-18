<?php

class Backend_User_Controller extends Base_Controller {

    public $restful = true;

    public function get_settings() {
        return View::make('backend.settings')->with('title', 'Eintstellungen');
    }

    public function get_allUsers() {
        $users = User::all();
        return View::make('backend.user.settingsall')
                        ->with('title', 'Eintstellungen')
                        ->with('users', $users);
    }

    public function get_userCreate() {
        return View::make('backend.user.settingscreate')
                        ->with('title', 'User hinzufügen');
    }

    public function post_userCreateAction() {
        if (Input::get('admin') === NULL) {

            User::create(array(
                'name' => Input::get('name'),
                'email' => Input::get('email'),
                'password' => Hash::make(Input::get('password')),
                'isAdmin' => 0
            ));
            return Redirect::to_route('settings')->with('message', 'User wurde erfolgreich erstellt!');
        } else {
            User::create(array(
                'email' => Input::get('email'),
                'password' => Hash::make(Input::get('password')),
                'isAdmin' => 1
            ));
            return Redirect::to_route('settings')->with('message', 'User (Admin) wurde erfolgreich erstellt!');
        }
    }

    public function post_userUpdateAction() {
        
        
        $user = User::find(Input::get('id'));
        
        
        $user->name = Input::get('name');
        
        $user->email = Input::get('email');
        if(Input::get('password') != '') {
            $user->password = Hash::make(Input::get('password'));
        }
        
         if (Input::get('admin') === NULL) {
             $user->isAdmin = 0;
         } else {
             $user->isAdmin = 1;
         }
        $user->save();
        return View::make('backend.user.settingsall')->with('message', 'User wurde erfolgreich aktualisiert!')->with('users', User::all());
    }

    public function post_userUpdateOrDelete() {
        if (Input::get('userUpdate') === NULL) {
            $users = Input::get('userDelete');
            foreach ($users as $user) {
                User::find($user)->delete();
            }
            return View::make('backend.user.settingsall')->with('message', 'User wurde erfolgreich gelöscht!')->with('users', User::all());
        } else {
            $user = User::find(Input::get('userUpdate'));
            return View::make('backend.user.settingsupdate')->with('user', $user);
        }
    }

}