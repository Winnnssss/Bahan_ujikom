<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Wiwin Dahnengsih',
            'isrole' => '1',
            'namerole' => 'administrator',
            'email' => 'fjr@gmail.com',
            'password' => bcrypt('password')

        ]);
        // \App\Models\User::factory(5)->create();
    }
}
