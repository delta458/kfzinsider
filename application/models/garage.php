<?php

class Garage extends Basemodel {
    
    public static $table = 'garage';
    public static $rules = array(
        'name'=>'required'
    );
    
}
