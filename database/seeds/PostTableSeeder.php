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
        DB::table('posts')->insert([
            'title' => 'Proyecto de emprededurismo UCC-León 2016',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo excepturi itaque consequatur qui aut molestias tempora aperiam maxime, nisi doloremque quia, temporibus atque, hic eligendi similique unde! Aliquid, rem, eos.',
            'summary' => 'Proyecto de emprededurismo UCC-León 2016',
            ]);

        DB::table('posts')->insert([
            'title' => 'Some project',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo excepturi itaque consequatur qui aut molestias tempora aperiam maxime, nisi doloremque quia, temporibus atque, hic eligendi similique unde! Aliquid, rem, eos.',
            'summary' => 'Some project',
            ]);

        DB::table('posts')->insert([
            'title' => 'Another project',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo excepturi itaque consequatur qui aut molestias tempora aperiam maxime, nisi doloremque quia, temporibus atque, hic eligendi similique unde! Aliquid, rem, eos.',
            'summary' => 'Another project',
            ]);
    }
}
