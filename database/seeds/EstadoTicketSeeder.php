<?php

use App\EstadoTicket;
use Illuminate\Database\Seeder;

class EstadoTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		EstadoTicket::truncate();

		// Cruzar contra funcionalidades

		EstadoTicket::create(['nombre'=>'Creado']);
		EstadoTicket::create(['nombre'=>'Asignar']);
		EstadoTicket::create(['nombre'=>'En Progreso']);
		EstadoTicket::create(['nombre'=>'En Espera']);
		EstadoTicket::create(['nombre'=>'Resuelto Telefonico']);
		EstadoTicket::create(['nombre'=>'Resuelto Tecnico']);
		EstadoTicket::create(['nombre'=>'Cerrado']);
    }
}