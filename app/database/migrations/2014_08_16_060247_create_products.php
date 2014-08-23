<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products',function($table){
            $table->increments('id');
            $table->string('name');
            $table->boolean('is_discount');
            $table->enum('category',array('E-Light','Nd-Yag Laser','IPL','Diode Laser','CO2 Laser Fractional','RF','Lipolaser','Cavitacion','Cryolipolysis','Multifunction'));
            $table->string('mainphoto');
            $table->text('introduction');
            $table->string('appphoto');
            $table->text('app');
            $table->text('advantage');
            $table->string('adphoto_1');
            $table->string('adphoto_2');
            $table->string('adphoto_3');
            $table->string('adphoto_4');
            $table->text('tocustomer');
            $table->string('footerphoto');
            $table->string('indexphoto');
            $table->string('mrg');
            $table->string('miniintro');
            $table->string('fnt');
            $table->string('style');
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
        Schema::drop('products');
	}

}
