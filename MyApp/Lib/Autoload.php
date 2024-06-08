<?php
// namespace MyApp\Lib;

// class Autoload{

//     public static function autoload($className){

//         $className= str_replace("MyApp","",$className);
//         $className= APP_PATH. $className .".php";

//         if(file_exists($className)){
//             require_once $className;
//         }

//     }
// }

// spl_autoload_register(__NAMESPACE__."\Autoload::autoload");