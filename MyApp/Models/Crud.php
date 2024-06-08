<?php

namespace MyApp\Models;

interface Crud{
    public function create($inputSaveData);
    public function read();
    public function edit($urlId);
    public function delete($urlId);
}