<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Riki Eprilion Saputra',
            'username' => 'riki28',
            'email' => 'rickzzsaputra28@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Post 1',
        //     'slug' => 'post-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae quam dolorum assumenda architecto suscipit in natus accusamus pariatur iusto.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        //     Amet a ad odit tenetur excepturi numquam atque ea nobis ipsum distinctio? 
        //     Sapiente incidunt voluptatibus quis odit asperiores recusandae ratione, praesentium, atque dolores ipsum tenetur nesciunt, sequi unde libero quibusdam labore nihil harum quo mollitia! 
        //     Repellendus quam eaque ullam vitae suscipit impedit?'
        // ]);
        // Post::create([
        //     'title' => 'Post 2',
        //     'slug' => 'post-kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae quam dolorum assumenda architecto suscipit in natus accusamus pariatur iusto.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        //     Amet a ad odit tenetur excepturi numquam atque ea nobis ipsum distinctio? 
        //     Sapiente incidunt voluptatibus quis odit asperiores recusandae ratione, praesentium, atque dolores ipsum tenetur nesciunt, sequi unde libero quibusdam labore nihil harum quo mollitia! 
        //     Repellendus quam eaque ullam vitae suscipit impedit?'
        // ]);
        // Post::create([
        //     'title' => 'Post 3',
        //     'slug' => 'post-ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae quam dolorum assumenda architecto suscipit in natus accusamus pariatur iusto.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        //     Amet a ad odit tenetur excepturi numquam atque ea nobis ipsum distinctio? 
        //     Sapiente incidunt voluptatibus quis odit asperiores recusandae ratione, praesentium, atque dolores ipsum tenetur nesciunt, sequi unde libero quibusdam labore nihil harum quo mollitia! 
        //     Repellendus quam eaque ullam vitae suscipit impedit?'
        // ]);
        // Post::create([
        //     'title' => 'Post 4',
        //     'slug' => 'post-keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae quam dolorum assumenda architecto suscipit in natus accusamus pariatur iusto.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        //     Amet a ad odit tenetur excepturi numquam atque ea nobis ipsum distinctio? 
        //     Sapiente incidunt voluptatibus quis odit asperiores recusandae ratione, praesentium, atque dolores ipsum tenetur nesciunt, sequi unde libero quibusdam labore nihil harum quo mollitia! 
        //     Repellendus quam eaque ullam vitae suscipit impedit?'
        // ]);
    }
}
