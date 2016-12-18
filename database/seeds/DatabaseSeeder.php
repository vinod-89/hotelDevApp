<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(['email' => 'foo@bar.com', 'name' => 'Admin', 'password' => 'admin@123']);
        User::create(['email' => 'john@doe.com', 'name' => 'John', 'password' => 'doe']);

    }

}