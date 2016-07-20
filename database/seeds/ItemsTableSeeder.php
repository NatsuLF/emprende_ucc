<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => 'Colmena hexagonal',
            'price' => 250,
            'description' => 'Colmena hexagonal modelo Vincent',
            'eng-desc' => 'Hexagonal hive model Vicente'
            ]);
    }
}
