<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Mista;

class Main extends BaseController
{

    // var $mista;

    // public function __construct()
    // {
    //     $this->mista = new Mista();

    // }

    public function index1()
    {
        echo view("index1");
    }
    
    public function index()
    {
        echo view('index');
    }

    // public function index1()
    // {
    //     $index1 = $this->mista->where("country", "pl")->orderBy("vyska","desc")->findAll();
    //     $data["mista"] = $index1;
    //     echo view("index", $data);


    
    // }

    // public function index2(){
    //     $index2 = $this->mista->where("country", "pl")->orderBy("vyska","desc")->findAll();
    //     $data["mista"] = $index2;
    //     echo view("index2", $data);

 
    
    // }


}