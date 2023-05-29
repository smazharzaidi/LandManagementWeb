<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrantUserLandsTable extends Migration
{
    public function up()
    {
        Schema::create('grant_user_lands', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grantor_id');
            $table->unsignedBigInteger('land_id');
            $table->unsignedBigInteger('grantee_id');
            $table->string('contract_no');
            $table->string('duration');
            $table->timestamps();

            $table->foreign('grantor_id')->references('id')->on('sellers');
            $table->foreign('land_id')->references('id')->on('lands');
            $table->foreign('grantee_id')->references('id')->on('sellers');
        });
    }

    public function down()
    {
        Schema::dropIfExists('grant_user_lands');
    }
}
