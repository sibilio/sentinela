<?php

use Illuminate\Http\Request;

Route::group(['middleware'=>'api', 'namespace'=>'Api'], function(){
    Route::post('aluno/create', "AlunoController@create");
    Route::post('chamada', "ChamadaController@doIt");
});
