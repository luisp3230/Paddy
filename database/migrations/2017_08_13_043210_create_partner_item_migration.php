<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerItemMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_item', function (Blueprint $table) {
            $table->integer('id_partner')->unsigned();          
            $table->integer('id_item')->unsigned();          
            $table->string('item');
            $table->string('description')->nullable();
            $table->float('price', 6, 2);  
            $table->string('image');
            $table->timestamps();

            $table->primary(['id_partner','id_item']);
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
        Schema::dropIfExists('partner_item');
    }
}
