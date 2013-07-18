<?php

class Backend_Category_Controller extends Base_Controller {

    public $restful = true;

    public function get_settings() {
        
        return View::make('backend.settings')->with('title', 'Eintstellungen');
        
    }

    public function get_allCategories() {
        $categories = Category::all();
        return View::make('backend.category.settingsall')
                        ->with('title', 'Eintstellungen')
                        ->with('categories', $categories);
    }

    public function get_categoryCreate() {
        
        return View::make('backend.category.settingscreate')->with('title', 'Kategorie hinzufügen');
        
    }

    public function post_categoryCreateAction() {
        
        Category::create(array(
            'category_name' => Input::get('name')
        ));
        
        return Redirect::to_route('settings')->with('message', 'Kategorie wurde erfolgreich erstellt!');
        
    }

    public function post_categoryUpdateAction() {
        
        $category = Category::find(Input::get('id'));
        $category->category_name = Input::get('category_name');
        $category->save();
        return View::make('backend.category.settingsall')->with('message', 'Kategorie wurde erfolgreich aktualisiert!')->with('categories', Category::all());
        
    }

    public function post_categoryUpdateOrDelete() {
        
        if (Input::get('categoryUpdate') === NULL) {
            $categories = Input::get('categoryDelete');
            foreach ($categories as $cat) {
                Category::find($cat)->delete();
            }
            return View::make('backend.category.settingsall')->with('message', 'Kategorie wurde erfolgreich gelöscht!')->with('categories', Category::all());
        } else {
            $category = Category::find(Input::get('categoryUpdate'));
            return View::make('backend.category.settingsupdate')->with('category', $category);
        }
        
    }

}