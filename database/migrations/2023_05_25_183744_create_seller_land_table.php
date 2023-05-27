<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerLandTable extends Migration
{
    public function up()
    {
        Schema::create('seller_land', function (Blueprint $table) {
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('land_id');
            $table->string('transaction_id');
            $table->decimal('tax_amount', 8, 2);
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->foreign('land_id')->references('id')->on('lands')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('seller_land');
    }
}
