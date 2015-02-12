<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePihakberwenangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('pihakberwenang');
		Schema::create('pihakberwenang', function ($table) {
			$table->increments('id');
			$table->string('nama');
			$table->string('alamat');
			$table->string('email');
			$table->integer('no_telp');
		});//

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
