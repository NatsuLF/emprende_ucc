<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Proyectos'
        ]);

        DB::table('tags')->insert([
            'name' => 'Emprendedurismo'
        ]);

        DB::table('tags')->insert([
            'name' => 'UCC'
        ]);

        DB::table('tags')->insert([
            'name' => 'PIMES'
        ]);

        DB::table('tags')->insert([
            'name' => 'Educación'
        ]);
    }
}
