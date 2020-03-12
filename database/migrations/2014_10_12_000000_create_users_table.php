<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
  
            $table->string('email')->unique();                         // Email
            $table->timestamp('email_verified_at')->nullable();       // Verificacion de email
            $table->string('password');                              // Clave 
            $table->string('slug')->unique();                       // Clave primaria 
            $table->string('status');                              // Estado desactivado activado
            $table->string('type');                               // Tipo --Agencia -- cliente -- super usuario
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
