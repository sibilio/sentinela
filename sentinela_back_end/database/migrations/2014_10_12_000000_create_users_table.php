<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('email', 70)->unique();
            $table->string('password', 70);
            $table->integer('papel_id');
            $table->boolean('bloqueado')->default(false);
            $table->string('telefone', 20)->nullable();
            $table->string('foto', 64)->nullable();
            $table->integer('curso_id')->default(0);
            $table->string('ciclo', 2)->default('00');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
