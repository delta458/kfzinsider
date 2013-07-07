<?php

class Service extends Basemodel {
    
    public static $table = 'service';
    public static $rules = array(
        'service_name'=>'required'
    );
    
}
