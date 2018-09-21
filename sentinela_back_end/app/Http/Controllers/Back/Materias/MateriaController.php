<?php
namespace App\Http\Controllers\Back\Materias;

use App\BaseApp\BaseController;

class MateriaController extends BaseController
{
   protected $viewPath = 'back.materias';
   protected $routeNamePrefix = 'materias';
   protected $model = 'App\Materias';
   protected $fieldSearch = 'nome';
   protected $editMessage = 'Matéria editada com sucesso!!!';
   protected $addMessage = 'Novo matéria criada com sucesso!!!';
   protected $validateRoles = [
                  'nome'=>'required|max:50|min:5',
                  'ciclo'=>'required|max:2|min:2',
                  'curso_id' => 'required'
             ];
   protected $crud = [
       'c'=>'create.materia',
       'r'=>'read.materia',
       'u'=>'update.materia',
       'd'=>'delete.materia'
   ];
}
