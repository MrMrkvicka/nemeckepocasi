<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;
use App\Models\station;
use App\Models\data;

class Main extends BaseController
{

 
    var $mista;
    var $data;
    var $station;
    public function __construct()
    {
        $this->mista = new Bundesland();
        $this->data = new Data();
        $this->station = new Station();
    }


    public function index1()
    {
        echo view("index1");
    }
    
    public function index()
    {
        echo view('index');
    }

    public function tabulka()
    {
        $tabulka = $this->mista->findAll();
        $data["mista"] = $tabulka;
        echo view("tabulka", $data);
    }
    public function zeme($idzeme): string
    {
        $data['station'] = $this->station->where('bundesland', $idzeme)->findAll();
        $data['bundesland'] = $this->mista->find($idzeme);
        return view('zem', $data);
    }







    


}