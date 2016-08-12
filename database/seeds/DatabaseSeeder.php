<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Post;
use App\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->command->info('Seeding starts.');

        $this->command->info('Removing data');
        DB::table('users')->delete();
        DB::table('tags')->delete();
        DB::table('posts')->delete();

        $this->command->info('Creating users');
        $default_user = User::create([
            'name' => env('DEFAULT_USER_NAME'),
            'email' => env('DEFAULT_USER_EMAIL'),
            'password' => bcrypt(env('DEFAULT_USER_PASSWORD'))
        ]);

        $another_default_user = User::create([
            'name' => env('ANOTHER_DEFAULT_USER_NAME'),
            'email' => env('ANOTHER_DEFAULT_USER_EMAIL'),
            'password' => bcrypt(env('ANOTHER_DEFAULT_USER_PASSWORD'))
        ]);

        $this->command->info('Creating tags');
        $tag1 = Tag::create([
            'name' => 'Tag1'
        ]);
        $tag2 = Tag::create([
            'name' => 'Tag2'
        ]);
        $tag3 = Tag::create([
            'name' => 'Tag3'
        ]);
        $tag4 = Tag::create([
            'name' => 'Tag4'
        ]);

        $this->command->info('Creating posts');
        $post1 = Post::create([
            'title' => 'Feria de Emprendedurismo UCC-León',
            'published' => true,
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo excepturi itaque consequatur qui aut molestias tempora aperiam maxime, nisi doloremque quia, temporibus atque, hic eligendi similique unde! Aliquid, rem, eos.',
            'slug' => 'Feria_de_Emprendedurismo_UCC_León',
            'summary' => 'Lorem ipsum dolor sit amet'
        ]);
        $post2 = Post::create([
            'title' => 'Proyectos',
            'published' => true,
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo excepturi itaque consequatur qui aut molestias tempora aperiam maxime, nisi doloremque quia, temporibus atque, hic eligendi similique unde! Aliquid, rem, eos.',
            'slug' => 'Proyectos',
            'summary' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
        ]);

        $this->command->info('Linking tags and posts');
            $post1->tags()->attach($tag1->id);
            $post1->tags()->attach($tag2->id);
            $post1->tags()->attach($tag3->id);
            $post2->tags()->attach($tag1->id);
            $post2->tags()->attach($tag4->id);

        $this->command->info('Linking users with posts');
            $default_user->posts()->save($post1);
            $another_default_user->posts()->save($post2);

        $this->command->info('Seeding ended with no problems');
    }
}
