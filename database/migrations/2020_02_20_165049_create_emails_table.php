<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('account_id');
            $table->string('contact_id');              // Relacion con el usuario  
            $table->string('slug')->unique();         // ID oculto
            $table->string('provider');              // nombre de la provedor de email... Gmail Hotmail        
            $table->string('pass');                // pass
            $table->string('user');               // user
     
            $table->timestamps();
            $table->foreign('account_id')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
}
