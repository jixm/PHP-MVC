<?php
use Respect\Validation\Validator as v;
class Rule {
	
	 public static function get_name(){
        $validator = v::stringType();
        return $validator;
    }

    public static function get_action(){
        $validator = v::numeric();
        return $validator;
    }

    public static function get_page(){
        $validator = v::numeric();
        return $validator;
    }
    public static function get_id(){
        $validator = v::numeric();
        return $validator;
    }

    public static function post_id(){
        $validator = v::numeric();
        return $validator;
    }

}