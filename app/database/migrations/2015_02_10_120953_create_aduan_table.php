<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAduanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('aduan');
		Schema::create('aduan', function ($table) {
			$table->increments('id');
			$table->string('foto');
			$table->string('deskripsi');
			$table->string('email_pelapor');
			$table->string('nama_pelapor');
			$table->integer('taman_id')->unsigned();
			$table->foreign('taman_id')->references('id')->on('taman');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('aduan');
	}

}
