<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'url' => 'https://dl.dropboxusercontent.com/s/kknqpayixxbn3zg/colmena-hexagonal.png?dl=0',
            'item_id' => 1
            ]);
    }
}