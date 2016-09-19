<?php

use Illuminate\Database\Seeder;
use Rest\Cliente;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Cliente::truncate();

        Cliente::create([
            'name' => 'Fulano de Tal',
            'email' => 'fulano@gmail.com'
        ]);

        Cliente::create([
            'name' => 'Reginaldo',
            'email' => 'reginaldo@gmail.com'
        ]);

        $this->command->info('The clientes were created.');
    }
}
