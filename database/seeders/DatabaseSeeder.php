<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Khairul Alam',
            'username' => 'khairul'
        ]);

        $category1= Category::factory()->create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        $category2 = Category::factory()->create([
            'name' => 'Business',
            'slug' => 'business'
        ]);
        $category3 = Category::factory()->create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(10)->create([
            'user_id' => $user->id,
            'category_id' => $category1->id
        ]);

        Post::factory(10)->create([
            'user_id' => $user->id,
            'category_id' => $category2->id
        ]);

        Post::factory(10)->create([
            'user_id' => $user->id,
            'category_id' => $category3->id
        ]);


    }
}
