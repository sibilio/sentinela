<?php
namespace Sentinela;

use Illuminate\Support\Facades\Storage;
use Sentinela\AlunoRepository;
use App\Presencas;

class Chamada
{
    public function doIt($photo)
    {
        $this->uploadFoto($photo);
    }
    
    private function uploadFoto($photo)
    {
        $base64img = str_replace('data:image/jpeg;base64,', '', $photo);
        $data = base64_decode($base64img);
        $file = str_random(60).'.jpg';
        Storage::disk('local')->put('public/chamada/'.$file, $data);
        
        return $file;
    }
}