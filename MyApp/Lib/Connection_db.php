<?php 

namespace MyApp\Lib;


class Connection_db{

    private $serverName = "localhost";
    private $userName   = "root";
    private $password   = "";
    private $dbName   = "MVC";
    public  $conn;

    function __construct()
    {
        $this->conn = new \mysqli($this->serverName,$this->userName,$this->password,$this->dbName); 
        
    }



}