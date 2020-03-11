<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('account_id');
            $table->string('slug')->unique();          // ID oculto
            $table->string('price');                  // desarrollo HTML 
            $table->string('type');                  // desarrollo HTML 
            $table->string('description');          // Url de administracion
            $table->string('status');              // Url de administracion
            $table->string('time');               // se genera factura mensal ? 
            $table->string('user');              // user
          
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
        Schema::dropIfExists('services');
    }
}
