<?php

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
        $this->call([
            // per chiamare i seeder contemporaneamente
            UsersTableSeeder::class,
            AvatarsTableSeeder::class,
            PostsTableSeeder::class,
        ]);
    }
}
