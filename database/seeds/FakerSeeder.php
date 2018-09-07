<?php

use App\Rol;
use App\TipoUsuario;
use Illuminate\Database\Seeder;

class FakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::truncate();
        TipoUsuario::truncate();

        factory(Rol::class, 100)->create();
        factory(TipoUsuario::class, 10)->create();
    }
}
