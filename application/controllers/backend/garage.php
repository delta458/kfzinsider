<?php

class Backend_Garage_Controller extends Base_Controller {

    public $restful = true;

    public function get_settings() {
        
        return View::make('backend.settings')->with('title', 'Eintstellungen');
        
    }

    public function get_allGarages() {
        
        $garages = Garage::all();
        
        return View::make('backend.garage.settingsall')
                        ->with('title', 'Eintstellungen')
                        ->with('garages', $garages);
        
    }

    public function get_garageCreate() {
        return View::make('backend.garage.settingscreate')->with('title', 'Werkstatt hinzufügen');
    }

    public function post_garageCreateAction() {
        
        Garage::create(array(
            'name' => Input::get('name'),
            'address' => Input::get('address')
        ));
        
        return Redirect::to_route('settings')->with('message', 'Werkstatt wurde erfolgreich erstellt!');
    }

    public function post_garageUpdateAction() {
        $garage = Garage::find(Input::get('id'));
        $garage->name = Input::get('name');
        $garage->address = Input::get('address');
        $garage->save();
        return View::make('backend.garage.settingsall')->with('message', 'Werkstatt wurde erfolgreich aktualisiert!')->with('garages', Garage::all());
    }

    public function post_garageUpdateOrDelete() {
        
        if (Input::get('garageUpdate') === NULL) {
            $garages = Input::get('garageDelete');
            foreach ($garages as $garage) {
                Garage::find($garage)->delete();
            }
            return View::make('backend.garage.settingsall')->with('message', 'Werkstatt wurde erfolgreich gelöscht!')->with('garages', Garage::all());
        } else {

            $garage = Garage::find(Input::get('garageUpdate'));
            return View::make('backend.garage.settingsupdate')->with('garage', $garage);
        }
        
    }

}