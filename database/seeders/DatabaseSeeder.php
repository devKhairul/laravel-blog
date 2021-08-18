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

        $category = Category::factory()->create();
        $category = Category::factory()->create();
        $category = Category::factory()->create();

        Post::factory(15)->create([
            'user_id' => $user->id,
            'category_id' => $category->id
        ]);


    }
}
