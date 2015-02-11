<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('update');
		Schema::create('update', function ($table) {
			$table->increments('id');
			$table->enum('status',array('SOLVED','IN PROGRESS','UNSOLVED','INVALID'));
			$table->dateTime('waktu');
			$table->integer('admin_id')->unsigned();
			$table->foreign('admin_id')->references('id')->on('admins');
			$table->integer('aduan_id')->unsigned();
			$table->foreign('aduan_id')->references('id')->on('aduan');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('update');
	}

}
