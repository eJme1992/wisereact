<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_service', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique(); 
            $table->unsignedBigInteger('agency_id')->unsigned();
            $table->unsignedBigInteger('client_id')->unsigned();
            $table->string('status');            
            $table->foreign('agency_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('accounts')->onDelete('cascade');
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
        Schema::dropIfExists('account_service');
    }
}
