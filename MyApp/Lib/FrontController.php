<?php 
namespace MyApp\Lib;

 use Exception;

class FrontController {

    protected $controller  ;
    protected $action  ;
    protected $params=[];

    private function _parsUrl()
    {
        $url = explode("/",trim($_SERVER['REQUEST_URI'],"/"),3);
        $this->controller = isset($url[0])&&$url[0]!=""?ucwords($url[0]):"index";
        $this->action = isset($url[1])&&$url[1]!=""?ucwords($url[1]):"default";
        $this->params = isset($url[2])&&$url[2]!=""?explode("/",$url[2]):[""];
        echo $this->controller;
    }

    public function __construct()
    {
        $this->_parsUrl();

    }

    public function dispatch(){
        $controllerClassName = "MyApp\Controllers\\".$this->controller."Controller";
        $controllerAction = $this->action;
        echo $controllerClassName;
        if(class_exists($controllerClassName)){

            $controller = new $controllerClassName();

            if(method_exists($controller,$controllerAction)){

                call_user_func_array([$controller,$controllerAction],$this->params);

            }else{
                throw new Exception("Sorry This Method:{$controllerAction} Not Found");
            }

        }else{

            throw new Exception("Sorry This controller Not Found");

        }
    }
}