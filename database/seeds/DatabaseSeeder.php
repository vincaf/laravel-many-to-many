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
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            RoleUserTableSeeder::class,
            UserDetailsTableSeeder::class,
            PostsTableSeeder::class,
            TagsTableSeeder::class,
            PostTagTableSeeder::class,
        ]);
    }
}
