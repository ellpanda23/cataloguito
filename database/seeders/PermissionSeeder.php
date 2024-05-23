<?php

namespace Database\Seeders;

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
        Permission::create(['name' => 'admin.home']);

        Permission::create(['name' => 'admin.logs.index']);
        Permission::create(['name' => 'admin.logs.show']);

        Permission::create(['name' => 'admin.users.index']);
        Permission::create(['name' => 'admin.users.edit']);
        Permission::create(['name' => 'admin.users.update']);

        Permission::create(['name' => 'admin.roles.index']);
        Permission::create(['name' => 'admin.roles.create']);
        Permission::create(['name' => 'admin.roles.edit']);
        Permission::create(['name' => 'admin.roles.destroy']);

        Permission::create(['name' => 'admin.socials.index']);
        Permission::create(['name' => 'admin.socials.store']);
        Permission::create(['name' => 'admin.socials.update']);
        Permission::create(['name' => 'admin.socials.destroy']);

        Permission::create(['name' => 'admin.cards.index']);
        Permission::create(['name' => 'admin.cards.edit']);
        Permission::create(['name' => 'admin.cards.update']);

        Permission::create(['name' => 'admin.categories.index']);
        Permission::create(['name' => 'admin.categories.create']);
        Permission::create(['name' => 'admin.categories.edit']);
        Permission::create(['name' => 'admin.categories.destroy']);

        Permission::create(['name' => 'admin.products.index']);
        Permission::create(['name' => 'admin.products.create']);
        Permission::create(['name' => 'admin.products.edit']);
        Permission::create(['name' => 'admin.products.destroy']);


    }
}
