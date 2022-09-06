<?php

namespace Database\Seeders\Auth;

use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('admin'),
        ])->assignRole('admin');

        \App\Models\User::factory(rand(10, 30))->create();
    }
}
