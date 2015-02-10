<?php

class AdminTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Admin::create(array('username' => 'admin', 'password' => Hash::make('admin')));
	}

}