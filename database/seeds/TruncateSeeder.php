<?php

use App\SATI;
use Illuminate\Database\Seeder;

class TruncateSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		SATI::truncate();
	}
}
