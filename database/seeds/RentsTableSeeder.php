<?php

use Illuminate\Database\Seeder;

class RentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rents')->insert([
            'fecha_entrada_arriendo' => '2009-08-06 20:23:28',
            'fechaSalidaArriendo' => '2009-09-06 20:23:28',
            'pago' => '20000',
            'client_id' => '1',
            'room_id' => '1',
          ]);
    }
}
