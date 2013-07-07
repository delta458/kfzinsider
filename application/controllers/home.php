<?php

class Home_Controller extends Base_Controller {

     public $restful = true;
     
    public function get_index() {
     //   if(Auth::check()){
     //   return View::make('master.index')->with('isadmin', (Auth::check() && Auth::user()->isadmin) ? true : false);
      //  View::share('name','bla');
         return View::make('home.home');
//        } else {
//            return View::make('master.index');
//        }
    }
    
       public function get_login() {
     //   if(Auth::check()){
     //   return View::make('master.index')->with('isadmin', (Auth::check() && Auth::user()->isadmin) ? true : false);
      //  View::share('name','bla');
         return "View::make('home.home');";
//        } else {
//            return View::make('master.index');
//        }
    }
   

}