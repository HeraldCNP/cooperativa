<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'ci' => '6680287',
            'nombres' => 'Herald',
            'paterno' => 'Choque',
            'materno' => 'Vargas',
            'telefono' => '72367995',
            'email' => 'heraldcnp@gmail.com',
            'password' => '123',
            'created_at' => date('Y-m-d-H:i:s'),
            'updated_at' => date('Y-m-d-H:i:s'),
        ]);

        DB::table('personas')->insert([
            'ci' => '8508696',
            'nombres' => 'Guillermo',
            'paterno' => 'Tola',
            'materno' => 'Montaño',
            'telefono' => '72367038',
            'email' => 'guillermogtm@gmail.com',
            'password' => '123456',
            'created_at' => date('Y-m-d-H:i:s'),
            'updated_at' => date('Y-m-d-H:i:s'),
        ]);
    }
}
