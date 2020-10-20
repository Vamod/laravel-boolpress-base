<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        for ($i=0; $i < 50; $i++) {
            $postNew = new Post();
            $postNew->title = $faker->text(100);
            $postNew->body = $faker->text(500);
            // prendo l'id degli user in maniera random
            $postNew->user_id = $users->random()->id;
            $postNew->save();

        }
    }
}
