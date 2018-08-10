<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'rut' => '19.355.436-9',
            'nombre_cliente' => 'Sebastian',
            'apellido_cliente' => 'Alegria',
            'acompanantes' => '0',
          ]);
    }
}
