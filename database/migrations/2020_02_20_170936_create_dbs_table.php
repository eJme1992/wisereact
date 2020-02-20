<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dbs', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('account_id');
            $table->string('hosting_id');
            $table->string('slug')->unique();       // ID oculto
            $table->string('url');                 // Url de administracion
            $table->string('pass');               // pass
            $table->string('user');              // user
            $table->string('name');             // pin
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
        Schema::dropIfExists('dbs');
    }
}
