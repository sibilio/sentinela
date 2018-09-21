@extends('templates.crud.editar-model')

<?php
   use App\BaseApp\Presentions\Form;
   
   $nome_da_tela = "Editar matérias";
   $link_edit_action = route('materia.update', ['curso'=>$registro->id]);
   $routePrefix = 'materias';
?>

@section('formulario')
<?php
   Form::text([
            'col' => 'col-md-5',
          'label' => 'Nome',
             'id' => 'nome',
    'placeholder' => 'Digite o nome do curso',
          'value' => old('nome')??$registro->nome
   ]);
   Form::text([
            'col' => 'col-md-5',
          'label' => 'Ciclo',
             'id' => 'ciclo',
    'placeholder' => 'Digite o cilo do aluno',
          'value' => old('ciclo')??$registro->ciclo
   ]);
   Form::text([
            'col' => 'col-md-5',
          'label' => 'Curso',
             'id' => 'curso_id',
    'placeholder' => 'Digite o id do curso.',
          'value' => old('ciclo')??$registro->curso_id
   ]);
?>
@endsection
