<?php

Route::get('/', function(){
   return redirect()->route('login');
});

Route::get('/vue', function(){
   return view('vue');
});

Route::get('/fora-de-servico', function (){
   return view('templates.fora-de-servico');
})->name('fora-de-servico');

Route::group(['prefix'=>'admin'], function(){
   $commomMiddlerawe = ['auth', 'can.background', 'check.block', 'check.user.block'];
   
   Route::group(['namespace'=>'\Back\Auth'], function() use ($commomMiddlerawe){
      Route::get('/', 'LoginController@index')->name('login');
      Route::post('/do-login', 'LoginController@doLogin')->name('login::doLogin');
      Route::group(['prefix'=>'recovery'], function(){
         Route::get('/recuperacao-de-senha/{token}', 'RecoveryPasswordController@telaRecuperarSenha')
            ->name('recovery::recuperarSenha');
         Route::get('/tela-digita-email-nova-senha/{showMessage}', 'RecoveryPasswordController@telaDigitaEmailNovaSenha')
            ->name('recovery::telaDigitaEmailNovaSenha');  
         Route::post('enviar-link', 'RecoveryPasswordController@enviarLink')
            ->name('recovery::enviarLink');
         Route::post('salvar-nova-senha', 'RecoveryPasswordController@salvarNovaSenha')
            ->name('recovery::salvarNovaSenha');
      });
      Route::group(['middleware' => $commomMiddlerawe], function(){
         Route::group(['prefix'=>'login'], function(){
            Route::get('/out', 'LoginController@logout')->name('login::out');
         });
         Route::get('/dashboard', 'LoginController@goDashboard')->name('dashboard');
      });
   });
   
   Route::group(['namespace'=>'\Back\User', 'middleware'=>$commomMiddlerawe], function(){
      Route::get('user/nova-senha', 'ChangePasswordAtiveUserController@showViewNewPassword')->name('users.showViewNewPassword');
      Route::put('user/salva-nova-senha', 'ChangePasswordAtiveUserController@changePassword')->name('users.changePassword');
      Route::get('users/bloquear/{id}', 'UserController@block')->name('users.block');
      Route::resource('users', 'UserController');
   });
   
   Route::group(['namespace'=>'\Back\Permissao', 'middleware'=>$commomMiddlerawe], function(){
      Route::post('permissoes/search', "PermissaoController@search")->name('permissoes.search');
      Route::resource('permissoes', 'PermissaoController');
   });
   
   Route::group(['namespace'=>'\Back\Permissao', 'middleware'=>$commomMiddlerawe], function(){
      Route::get('atribuicoes/', "AtribuicaoController@index")->name('atribuicoes.index');
      Route::get('atribuicoes/papel/{papel_id}', "AtribuicaoController@selecionarPapel")
              ->name('atribuicoes.selecionar-papel');
      Route::get(
                  'atribuicoes/mudar-permissao/{operacao}/{papel_id}/{permissao_id}',
                  'AtribuicaoController@mudarPermissao'
                )->name('atribuicoes.mudar-permissao');
   });
   
   Route::group(['namespace'=>'\Back\Papel', 'middleware'=>$commomMiddlerawe], function(){
      Route::post('papeis/search', "PapelController@search")->name('papeis.search');
      Route::resource('papeis', 'PapelController');
   });
   
   Route::group(['namespace'=>'\Back\User', 'middleware'=>$commomMiddlerawe], function(){
      Route::post('users/search', "UserController@search")->name('users.search');
      Route::resource('users', 'UserController');
   });
   
   Route::group(['namespace'=>'\Back\Dados', 'middleware'=>$commomMiddlerawe], function(){
      Route::post('dados/search', "DadoController@search")->name('dados.search');
      Route::resource('dados', 'DadoController');
   });
   
   Route::group(['namespace'=>'\Back\Cursos', 'middleware'=>$commomMiddlerawe], function(){
      Route::post('cursos/search', "CursoController@search")->name('cursos.search');
      Route::resource('cursos', 'CursoController');
   });
   
   Route::group(['namespace'=>'\Back\Materias', 'middleware'=>$commomMiddlerawe], function(){
      Route::post('materias/search', "MateriaController@search")->name('materias.search');
      Route::resource('materias', 'MateriaController');
   });
});
