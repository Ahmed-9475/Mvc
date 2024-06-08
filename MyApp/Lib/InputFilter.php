<?php
namespace MyApp\Lib;

trait InputFilter{

    public function filterNum($input){

        return filter_var($input,FILTER_VALIDATE_INT);
    }
    
    public function filterStr($input){

        //$input= htmlentities(strip_tags($input),ENT_QUOTES,"UTF-8");
        $input = trim(htmlspecialchars($input,FILTER_FLAG_STRIP_HIGH));
        return $input;

    }
}