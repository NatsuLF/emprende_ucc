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
            'name' => str_random(10)
        ]);

        DB::table('tags')->insert([
            'name' => str_random(10)
        ]);

        DB::table('tags')->insert([
            'name' => str_random(10)
        ]);

        DB::table('tags')->insert([
            'name' => str_random(10)
        ]);

        DB::table('tags')->insert([
            'name' => str_random(10)
        ]);

        DB::table('tags')->insert([
            'name' => str_random(10)
        ]);
    }
}
