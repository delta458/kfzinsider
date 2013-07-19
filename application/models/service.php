<?php

class Service extends Basemodel {
    
    public static $table = 'service';
    public static $rules = array(
        'service_name'=>'required'
    );
    
    public function category() {
        return $this->belongs_to('Category','category_id');
    }
    
}
