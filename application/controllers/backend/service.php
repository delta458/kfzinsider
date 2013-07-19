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
                ->with('title', 'Dienstleistung hinzufügen')
            ->with('categories',Category::lists('category_name','id'));
       
    }

    public function post_serviceCreateAction() {
        
        Service::create(array(
            'service_name' => Input::get('name'),
            'category_id' => Input::get('categories')
        ));
       
        return View::make('backend.service.settingsall')->with('message', 'Dienstleistung wurde erfolgreich erstellt!')->with('services', Service::all());
        
    }

    public function post_serviceUpdateAction() {
        
        $service = Service::find(Input::get('id'));
        $service->service_name = Input::get('service_name');
        $service->category_id = Input::get('categories');
        $service->save();
        return View::make('backend.service.settingsall')->with('message', 'Dienstleistung wurde erfolgreich aktualisiert!')->with('services', Service::all());
           
    }

    public function post_serviceUpdateOrDelete() {
        
        if (Input::get('serviceUpdate') === NULL) {
            $services = Input::get('serviceDelete');
            foreach ($services as $service) {
                Service::find($service)->delete();
            }
            return View::make('backend.service.settingsall')->with('message', 'Dienstleistung wurde erfolgreich gelöscht!')->with('services', Service::all());
        } else {
            $service = Service::find(Input::get('serviceUpdate'));
            return View::make('backend.service.settingsupdate')
                    ->with('service', $service)
                    ->with('categories',Category::lists('category_name','id'));
        }
        
    }

}