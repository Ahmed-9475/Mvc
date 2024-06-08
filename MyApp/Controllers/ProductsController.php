<?php
namespace MyApp\Controllers;

use MyApp\Lib\FrontController;
use MyApp\Lib\InputFilter;
use MyApp\Lib\View;
use MyApp\Models\Products;

class ProductsController  extends FrontController{

    use View,InputFilter;

    public $proData ;
    public $inputSaveData =[] ;

    public function index(){  
        $data = new Products();
        $this->proData= $data->read();
        $this->VIEWS_PATH();
    }

    protected function add(){
        if(isset($_POST['submit'])&&$_SERVER['REQUEST_METHOD']=='POST'&&!empty($_POST)){

            $this->inputSaveData ['Title']    = $this->filterStr($_POST['Title'])??"";
            $this->inputSaveData ['Category'] = $this->filterStr($_POST['Category'])??"";
            $this->inputSaveData ['Text']     = $this->filterStr($_POST['Text'])??"";
            $this->inputSaveData ['Price']    = $this->filterNum($_POST['Price'])??"";
            $this->inputSaveData ['Image']    = $_FILES["Image"]["name"];

            $inputData = new Products();
            $inputData->create($this->inputSaveData);

            $data = new Products();
            $this->proData= $data->read();
            $this->VIEWS_PATH('index');
            
    }else{
        $this->VIEWS_PATH();
    }

   

}

    public function edit(){

        $urlId = array_shift($this->params);
        $inputData = new Products();
        $inputData->edit($urlId );
        $this->proData= $inputData->edit($urlId);

        if(isset($_POST['submitEdit'])&&$_SERVER['REQUEST_METHOD']=='POST'&&!empty($_POST)){

            $this->inputSaveData ['Title']    = $this->filterStr($_POST['Title'])??"";
            $this->inputSaveData ['Category'] = $this->filterStr($_POST['Category'])??"";
            $this->inputSaveData ['Text']     = $this->filterStr($_POST['Text'])??"";
            $this->inputSaveData ['Price']    = $this->filterNum($_POST['Price'])??"";
            $this->inputSaveData ['Image']    = $_FILES["Image"]["name"];

            $inputData = new Products();
            $inputData->update($this->inputSaveData,$urlId);
    }
    
    $this->VIEWS_PATH();

    }



    public function delete(){
        $urlId = array_shift($this->params);
        $inputData = new Products();
        $inputData->delete($urlId );

        $this->VIEWS_PATH();

    }

}