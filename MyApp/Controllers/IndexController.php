<?php
namespace MyApp\Controllers;

use MyApp\Lib\FrontController;

class IndexController extends FrontController{

    public function default(){
        
        $view = VIEWS_PATH. $this->controller .DS. $this->action."View.php";
        file_exists($view)?require_once $view:"Sorry The File Not Exists";

    }

}

