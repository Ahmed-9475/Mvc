<?php
namespace MyApp\Models;
use MyApp\Models\Crud;
use MyApp\Lib\Connection_db;

class Products extends Connection_db implements Crud{
    

    public function create($inputSaveData){

        $Title        = $inputSaveData['Title'] ; 
        $Category     = $inputSaveData['Category'] ; 
        $Text         = $inputSaveData['Text'] ; 
        $Price        = $inputSaveData['Price'] ; 
        $Image        = $inputSaveData['Image'] ; 
        
        if($inputSaveData != null){
        return $this->conn->query("INSERT INTO products (Title,Category,Text,Price,Image) VALUES ('$Title','$Category','$Text','$Price','$Image')");
        }
    }
    
    public function read()
    {
        return $this->conn->query("SELECT * FROM products")->fetch_all(MYSQLI_ASSOC);
    }

    public function edit($urlId){

        if(isset($urlId)){
       return $this->conn->query("SELECT * FROM products WHERE Id = $urlId ")->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function update($updateData,$urlId){

        $Title        = $updateData['Title'] ; 
        $Category     = $updateData['Category'] ; 
        $Text         = $updateData['Text'] ; 
        $Price        = $updateData['Price'] ; 
        $Image        = $updateData['Image'] ; 

        if(!empty($updateData)&&$updateData!=""){
        return $this->conn->query("UPDATE products  SET Title =  '$Title',Category =  '$Category',Text =  '$Text',Price =  '$Price',Image =  '$Image'WHERE Id = '$urlId'");
        }
    }
    public function delete($urlId){
        
        if(isset($urlId)){
        return $this->conn->query("DELETE FROM products WHERE Id = '$urlId'");
        }
    }

}

