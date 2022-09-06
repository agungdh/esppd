<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $this->call([
            Auth\PermissionSeeder::class,
            Auth\RoleSeeder::class,
            Auth\UserSeeder::class,
        ]);
    }
}
