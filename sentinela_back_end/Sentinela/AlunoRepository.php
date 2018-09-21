<?php
namespace Sentinela;

use App\User;
use Illuminate\Support\Facades\Storage;

class AlunoRepository
{
    public function getCursos()
    {
        
    }
    
    public function createAluno(Array $data)
    {
        $aluno = new User();
        $aluno->name = $data['name'];
        $aluno->email = "email".str_random(5)."@email.com";
        $aluno->password = bcrypt("senha");
        $aluno->papel_id = 8;
        $aluno->curso_id = 1;
        $aluno->ciclo = '01';
        $aluno->foto = $this->uploadFoto($data['photo']);
        $aluno->save();
    }
    
    private function uploadFoto($photo)
    {
        $base64img = str_replace('data:image/jpeg;base64,', '', $photo);
        $data = base64_decode($base64img);
        $file = str_random(60).'.jpg';
        Storage::disk('local')->put('public/alunos/'.$file, $data);
        
        return $file;
    }
    
    public function getAll()
    {
        return User::where('papel_id', 8)->get();
    }
}
