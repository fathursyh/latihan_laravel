<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Fathur Syah',
            'email'=> 'fathur@gmail.com',
            'password'=> bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Rara Ayu',
            'email'=> 'rara@gmail.com',
            'password'=> bcrypt('231196'),
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Daily Life',
            'slug' => 'daily-life'
        ]);

        Post::create([
            'title' => 'Judul Satu',
            'slug'=> 'judul-satu',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias odio voluptatum eum iure perferendis exercitationem, blanditiis quisquam perspiciatis rem esse, tenetur quasi voluptatibus nostrum quam accusantium id quas iusto ullam tempora? Dicta aliquid, quis tempore ullam possimus quia fugit id vel tempora distinctio corrupti, autem, dolor labore? Beatae voluptas nostrum consequatur! Reiciendis dignissimos unde deserunt atque, velit earum odit, impedit magnam quia qui alias dolorem harum saepe? Provident, iure assumenda aliquam cupiditate ipsam quis ad reiciendis est, eveniet eius rem sequi velit nihil minus. Officiis possimus consequuntur accusantium nobis temporibus ipsa fugit, eaque explicabo numquam ab mollitia, nihil, ea earum!',
            'category_id' => 1,
            'user_id'=> 1,
        ]);
        Post::create([
            'title' => 'Judul Dua',
            'slug'=> 'judul-dua',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias odio voluptatum eum iure perferendis exercitationem, blanditiis quisquam perspiciatis rem esse, tenetur quasi voluptatibus nostrum quam accusantium id quas iusto ullam tempora? Dicta aliquid, quis tempore ullam possimus quia fugit id vel tempora distinctio corrupti, autem, dolor labore? Beatae voluptas nostrum consequatur! Reiciendis dignissimos unde deserunt atque, velit earum odit, impedit magnam quia qui alias dolorem harum saepe? Provident, iure assumenda aliquam cupiditate ipsam quis ad reiciendis est, eveniet eius rem sequi velit nihil minus. Officiis possimus consequuntur accusantium nobis temporibus ipsa fugit, eaque explicabo numquam ab mollitia, nihil, ea earum!',
            'category_id' => 1,
            'user_id'=> 1,
        ]);
        Post::create([
            'title' => 'Judul Tiga',
            'slug'=> 'judul-tiga',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias odio voluptatum eum iure perferendis exercitationem, blanditiis quisquam perspiciatis rem esse, tenetur quasi voluptatibus nostrum quam accusantium id quas iusto ullam tempora? Dicta aliquid, quis tempore ullam possimus quia fugit id vel tempora distinctio corrupti, autem, dolor labore? Beatae voluptas nostrum consequatur! Reiciendis dignissimos unde deserunt atque, velit earum odit, impedit magnam quia qui alias dolorem harum saepe? Provident, iure assumenda aliquam cupiditate ipsam quis ad reiciendis est, eveniet eius rem sequi velit nihil minus. Officiis possimus consequuntur accusantium nobis temporibus ipsa fugit, eaque explicabo numquam ab mollitia, nihil, ea earum!',
            'category_id' => 2,
            'user_id'=> 2,
        ]);
    }
}
