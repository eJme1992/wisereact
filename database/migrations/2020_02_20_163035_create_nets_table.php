<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nets', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('account_id');              // Relacion con el usuario  
            $table->string('slug')->unique();         // ID oculto
            $table->string('name');                  // nombre de la red social
            $table->string('url');                  // url
            $table->string('pass');                // pass
            $table->string('user');               // user
     
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nets');
    }
}
