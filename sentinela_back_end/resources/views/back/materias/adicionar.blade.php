@extends('templates.crud.adicionar-model')

<?php
   use App\BaseApp\Presentions\Form;
   
   $nome_da_tela = "Adicionar nova materia";
   $link_add_action = route('materias.store');
   $routePrefix = 'materias';
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
   Form::text([
            'col' => 'col-md-5',
          'label' => 'Ciclo',
             'id' => 'ciclo',
    'placeholder' => 'Digite o cilo do aluno',
          'value' => old('ciclo')??''
   ]);
   Form::text([
            'col' => 'col-md-5',
          'label' => 'Curso',
             'id' => 'curso_id',
    'placeholder' => 'Digite o id do curso.',
          'value' => old('ciclo')??''
   ]);
?>
@endsection
