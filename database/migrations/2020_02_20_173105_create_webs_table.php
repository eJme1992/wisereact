<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webs', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('account_id');
            $table->string('db_id')->nullable();
            $table->string('hosting_id')->nullable();
            $table->string('slug')->unique();           // ID oculto
            $table->string('development');            // desarrollo HTML 
            $table->string('web_type');              // desarrollo HTML 
            $table->string('url_admin');            // Url de administracion
            $table->string('url');                 // Url de administracion
            $table->string('pass');               // pass
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
        Schema::dropIfExists('webs');
    }
}
