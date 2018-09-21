@extends('templates.crud.adicionar-model')

<?php
   use App\BaseApp\Presentions\Form;
   
   $nome_da_tela = "Adicionar novo curso";
   $link_add_action = route('cursos.store');
   $routePrefix = 'cursos';
?>

@section('formulario')
<?php
   
   Form::text([
            'col' => 'col-md-5',
          'label' => 'Nome',
             'id' => 'nome',
    'placeholder' => 'Digite o nome do curso',
          'value' => old('nome')??''
   ]);
?>
@endsection
