<?php

use Illuminate\Database\Seeder;

class rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['nombre' => 'superusuario'],
            ['nombre' => 'administrador'],
            ['nombre' => 'usuario'],
            ['nombre' => 'invitado']
           ]);
    }
}
