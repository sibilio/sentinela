@extends('templates.crud.listagem-model')

<?php
   $nome_da_tela = "Listagem de chaves de dados";
   $routePrefix = 'cursos';
   $campo_pesquisar = 'nome';
   $place_hold_pesquisa = "Digite o nome do curso para a pesquisa";
   $td_path = 'back.cursos.tds'; //as linhas da tabela
?>

@section('th')
   <th>Nome</th>
@endsection

