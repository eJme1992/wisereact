<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('account_id');                 // Relacion con el usuario  
            $table->string('slug')->unique();            // ID oculto
            $table->string('country');                  // Pais
            $table->string('province');                // Provincia
            $table->string('city');                   // Ciudad
            $table->string('address');               // Direccion
            $table->string('postal_code');          // Codigo postal
            $table->string('type');                // Tipo principal secundario
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
        Schema::dropIfExists('addresses');
    }
}
