<?php

use App\Models\Role;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $roles = Role::all();
        $users = User::all();

        foreach ($users as $user) {

            if ($user->id === 1) {
                $user->roles()->attach([1]);
            } else {
                $randomRoles = $faker->randomElements($roles, 2, false);

                foreach ($randomRoles as $randomRole) {
                    $user->roles()->attach($randomRole->id);
                }
            }
        }
    }
}
