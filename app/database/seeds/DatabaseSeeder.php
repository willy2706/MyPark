<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('AdminTableSeeder');
		$this->call('TamanTableSeeder');
		$this->call('AduanTableSeeder');
		$this->call('PihakberwenangTableSeeder');
	}

}
