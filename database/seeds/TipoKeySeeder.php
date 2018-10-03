<?php

use App\TipoKey;
use Illuminate\Database\Seeder;

class TipoKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	TipoKey::truncate();

    	TipoKey::create(['nombre'=>'Fisica']);
    	TipoKey::create(['nombre'=>'Digital']);
    }
}
