<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostings', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('account_id');
            $table->string('slug')->unique();         // ID oculto
            $table->string('provider');              // nombre de la provedor de hosting        
            $table->string('plan');                 // Plan contratado
            $table->string('url_admin');           // Url de administracion
            $table->string('pass');               // pass
            $table->string('user');              // user
            $table->string('pin');              // pin
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
        Schema::dropIfExists('hostings');
    }
}
