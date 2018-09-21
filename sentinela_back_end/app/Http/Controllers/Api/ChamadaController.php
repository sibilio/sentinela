<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinela\Chamada;

class ChamadaController extends Controller
{
    private $chamada;
    
    public function __construct()
    {
        $this->chamada = new Chamada();
    }
    
    public function doIt(Request $request)
    {
        $this->chamada->doIt($request['photo']);
        //return ['photo'=>$request['photo']];
    }
}
