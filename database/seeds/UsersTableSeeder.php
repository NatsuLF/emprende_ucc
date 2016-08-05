<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Leonel Barrera',
            'email' => 'leodota7@gmail.com',
            'password' => bcrypt('mardan'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mario Martinez',
            'email' => 'mario.martinez@gmail.com',
            'password' => bcrypt('nami'),
        ]);
    }
}
