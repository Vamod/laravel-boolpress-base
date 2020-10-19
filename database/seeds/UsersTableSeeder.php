<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) {
            $userNew = new User();
            $userNew->name = $faker->name;
            $userNew->email = $faker->email;
            // hash per codifica
            $userNew->password = Hash::make('prova');
            $userNew->save();
        }
    }
}
