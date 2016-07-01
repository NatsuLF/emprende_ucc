<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'title' => 'Las abejas',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo excepturi itaque consequatur qui aut molestias tempora aperiam maxime, nisi doloremque quia, temporibus atque, hic eligendi similique unde! Aliquid, rem, eos.',
            ]);

        DB::table('post')->insert([
            'title' => 'La miel de abeja',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo excepturi itaque consequatur qui aut molestias tempora aperiam maxime, nisi doloremque quia, temporibus atque, hic eligendi similique unde! Aliquid, rem, eos.',
            ]);

    }
}
