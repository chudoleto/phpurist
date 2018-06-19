<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DumpSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
	
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		
		$sql = base_path('database/seeds/dump.sql');
		DB::unprepared(file_get_contents($sql));
		
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}