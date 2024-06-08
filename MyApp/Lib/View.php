<?php

namespace MyApp\Lib;

trait View {

    public function VIEWS_PATH($action=null){
        if($action){
        
            $view = VIEWS_PATH. $this->controller .DS. $action."View.php";

        }else{
            
            $view = VIEWS_PATH. $this->controller .DS. $this->action."View.php";

        }
        file_exists($view)? require_once $view:"Sorry The File Not Exists";
    }

}

