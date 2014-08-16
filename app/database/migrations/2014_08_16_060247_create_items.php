<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items',function($table){
            $table->increments('id');
            $table->string('name');
            $table->boolean('is_discount');
            $table->string('category');
            $table->string('tag');
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
        Schema::drop('items');
	}

}
