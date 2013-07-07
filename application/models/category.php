<?php

class Category extends Basemodel {
    
    public static $table = 'category';
    public static $rules = array(
        'category_name'=>'required'
    );
    
}
