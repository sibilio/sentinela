@extends('templates.crud.editar-model')

<?php
   use App\BaseApp\Presentions\Form;
   
   $nome_da_tela = "Editar curso";
   $link_edit_action = route('curso.update', ['curso'=>$registro->id]);
   $routePrefix = 'cursos';
?>

@section('formulario')
<?php
   Form::text([
            'col' => 'col-md-5',
          'label' => 'Nome',
             'id' => 'nome',
    'placeholder' => 'Digite o nome',
          'value' => old('nome')??$registro->nome
   ]);
?>
@endsection
