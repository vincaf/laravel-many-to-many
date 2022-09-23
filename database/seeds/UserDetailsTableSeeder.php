<?php

use App\Models\UserDetail;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        foreach ($users as $user) {
            $userDetail = new UserDetail();
            $userDetail->user_id = $user->id;
            $userDetail->address = $faker->address();
            $userDetail->phone = $faker->phoneNumber();
            $userDetail->save();
        }
    }
}
