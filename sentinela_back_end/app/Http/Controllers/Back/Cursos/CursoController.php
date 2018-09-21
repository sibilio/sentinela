<?php
namespace App\Http\Controllers\Back\Cursos;

use App\BaseApp\BaseController;

class CursoController extends BaseController
{
   protected $viewPath = 'back.cursos';
   protected $routeNamePrefix = 'cursos';
   protected $model = 'App\Cursos';
   protected $fieldSearch = 'nome';
   protected $editMessage = 'Curso editado com sucesso!!!';
   protected $addMessage = 'Novo curso criada com sucesso!!!';
   protected $validateRoles = [
                  'nome'=>'required|max:50|min:5',
             ];
   protected $crud = [
       'c'=>'create.curso',
       'r'=>'read.curso',
       'u'=>'update.curso',
       'd'=>'delete.curso'
   ];
}
