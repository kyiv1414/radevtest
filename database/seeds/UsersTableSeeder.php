<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'radevtest',
            'email' => 'ra@dev.test',
            'password' => bcrypt('111111'),
        ]);
    }
}
