<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $user = User::factory()->create([
            'name' => 'Khairul Alam',
            'username' => 'khairul3'
        ]);

        $post = Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => 1
        ]);


        return [
           'body' => $this->faker->paragraph(),
           'user_id' => $user->id,
           'post_id' => $post->id
        ];
    }
}
