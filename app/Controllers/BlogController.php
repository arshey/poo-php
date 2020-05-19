<?php 

namespace App\Controllers;

class BlogControllers{

    public function index(){
        echo 'je suis la homepage';
    }

    public function show(int $id){
        echo 'je suis le post '.$id;
    }

}