<?php

class Backend_Service_Controller extends Base_Controller {

    public $restful = true;

    public function get_settings() {
        return View::make('backend.settings')->with('title', 'Eintstellungen');
    }

    public function get_allServices() {
        $services = Service::all();
        return View::make('backend.service.settingsall')
                        ->with('title', 'Eintstellungen')
                        ->with('services', $services);
    }

    public function get_serviceCreate() {
        return View::make('backend.service.settingscreate')
                        ->with('title', 'Dienstleistung hinzufügen');
    }

    public function post_serviceCreateAction() {
        //Validate the input
        //TODO
        //Create a new service based  by input
        Service::create(array(
            'service_name' => Input::get('name')
        ));

        //give feedback
        return Redirect::to_route('settings')->with('message', 'Dienstleistung wurde erfolgreich erstellt!');
    }

    public function post_serviceUpdateAction() {
        $service = Service::find(Input::get('id'));
        $service->service_name = Input::get('service_name');
        $service->save();
        return View::make('backend.service.settingsall')->with('message', 'Dienstleistung wurde erfolgreich aktualisiert!')->with('services', Service::all());
    }

    public function post_serviceUpdateOrDelete() {
        //TODO Update service
        if (Input::get('serviceUpdate') === NULL) {
            $service = Service::find(Input::get('serviceDelete'));
            $service->delete();

            //Garage::delete(array('id' => $serviceId));
            return View::make('backend.service.settingsall')->with('message', 'Dienstleistung wurde erfolgreich gelöscht!')->with('services', Service::all());
        } else {
            $service = Service::find(Input::get('serviceUpdate'));
            return View::make('backend.service.settingsupdate')->with('service', $service);
        }
    }

}