<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerStoreMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_store', function (Blueprint $table) {
            $table->integer('id_partner')->unsigned();          
            $table->integer('id_store')->unsigned();          
            $table->string('store');
            $table->string('description')->nullable();
            $table->float('x');
            $table->float('y');
            $table->string('address_reference')->nullable();
            $table->string('image');
            $table->timestamps();

            $table->primary(['id_partner','id_store']);
            $table->foreign('id_partner')->references('id')->on('partner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partner_store');
    }
}
