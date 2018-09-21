<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Sentinela\AlunoRepository;

class AlunoController extends Controller
{
    private $alunoRepository;
    
    public function __construct()
    {
        $this->alunoRepository = new AlunoRepository();
    }
    public function create(Request $request)
    {
        $this->alunoRepository->createAluno($request->all());
        return \Response::json(['operacao'=>'ok']);
    }
}
