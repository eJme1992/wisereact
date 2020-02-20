<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('user_id');                   // Relacion con el usuario  
            $table->string('slug')->unique();           // ID oculto
            $table->string('name');                    // Nombre de Fantasia  
            //$table->string('fantasy_name');         // Nombre de la empresa 
            $table->string('customer_type');         // Tipo de cliente Juridico o Natural
            $table->string('industry');             // Industria                 
            $table->string('contact_topic');       // Tema de contacto
            $table->string('referred');           // Referido
            $table->string('logo');              // Logo o foto 
            $table->string('description');      // Descripcion 
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
