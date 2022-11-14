<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'read-rugsatnama']);
        Permission::create(['name' => 'edit-rugsatnama']);
        Permission::create(['name' => 'delete-rugsatnama']);

        Permission::create(['name' => 'read-yuztutma']);
        Permission::create(['name' => 'edit-yuztutma']);
        Permission::create(['name' => 'delete-yuztutma']);

        $adminRole = Role::create(['name' => 'Admin']);
        $adminRugsatnamaRole = Role::create(['name' => 'AdminRugsatnama']);
        $adminYuztutmaRole = Role::create(['name' => 'AdminYuztutma']);
        
        $adminRole->givePermissionTo([
            'read-rugsatnama',
            'edit-rugsatnama',
            'delete-rugsatnama',
            'read-yuztutma',
            'edit-yuztutma',
            'delete-yuztutma',
        ]);

        $adminRugsatnamaRole->givePermissionTo([
            'read-rugsatnama',
            'edit-rugsatnama',
            'delete-rugsatnama'
        ]);

        $adminYuztutmaRole->givePermissionTo([
            'read-yuztutma',
            'edit-yuztutma',
            'delete-yuztutma'
        ]);
    }
}
