<?php

use Illuminate\Database\Seeder;
use App\Cursos;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->cadastra("Análise e desenvolvimento de sistemas");
        $this->cadastra("Sistemas para internet");
        $this->cadastra("Gestão Empresarial");
        $this->cadastra("Gestão Portuária");
    }
    
    public function cadastra($nome)
    {
        $curso = new Cursos();
        $curso->nome = $nome;
        $curso->save();
    }
}
