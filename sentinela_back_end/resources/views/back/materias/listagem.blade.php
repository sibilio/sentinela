@extends('templates.crud.listagem-model')

<?php
   $nome_da_tela = "Listagem de materias";
   $routePrefix = 'materias';
   $campo_pesquisar = 'nome';
   $place_hold_pesquisa = "Digite o nome da materia para a pesquisa";
   $td_path = 'back.materias.tds'; //as linhas da tabela
?>

@section('th')
   <th>Nome</th>
   <th>Curso</th>
   <th>Ciclo</th>
@endsection

