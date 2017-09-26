<?php

use Illuminate\Database\Eloquent\Collection;
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
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('secret'),
            'created_by' => 'admin',
            'updated_by' => 'admin'
        ]);
    }
}
