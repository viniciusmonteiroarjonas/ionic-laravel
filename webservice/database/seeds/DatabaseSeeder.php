<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		// $this->call(UsersTableSeeder::class);
		DB::table('users')->insert([
			'name' => 'Vinicius Monteiro Arjonas',
			'email' => 'viniciusmonteiroarjonas@outlook.com',
			'password' => bcrypt('180213'),
		]);
	}
}
