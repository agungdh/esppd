<?php

namespace Database\Seeders\Auth;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = collect([

        ]);

        $modules->each(function ($module) {
            Permission::create(['name' => 'create '.$module]);
            Permission::create(['name' => 'read '.$module]);
            Permission::create(['name' => 'update '.$module]);
            Permission::create(['name' => 'delete '.$module]);
        });
    }
}
